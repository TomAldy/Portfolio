  function register()
    {
      $("#registerform").fadeToggle();
    }
    function login()
    {
      $("#loginform").fadeToggle();
    }
    function confirmLogOut()
    {
      $("#logoutalert").fadeToggle();
    }
	function confirmSeenAlert()
    {
      $("#errorpopup").fadeToggle();
    }

function confirmMockupSeenAlert()
    {
      $("#mockuppopup").fadeToggle();
    }

function confirmJobAlreadySaved()
    {
      $("#jobalreadysaved").fadeToggle();
    }

  function checkLoggedIn()
    {
    var storedUsername = localStorage.getItem("username");
	var storedJobs = localStorage.getItem("savedjobscount");
    var loginCheck = localStorage.getItem("loggedIn");
    if (loginCheck == "yes") {
      $(".topbar").html("<span><a href=\"javascript:LogMeOut();\">Logout</a></span><span id=\"savedJobs\">Saved Jobs("+ storedJobs +")</span><span>Welcome, "+ storedUsername +"!</span>");
    }else{
	window.localStorage.setItem("loggedIn","no");
	}
  }
  
  function checkApplyLoggedIn()
    {
    var storedUsername = localStorage.getItem("username");
    var loginCheck = localStorage.getItem("loggedIn");
    if (loginCheck == "no") {
      $("#applybutton1").html("<a href=\"javascript:login();\"><button class=\"savejob smallapply pull-right\" type=\"button\">Apply Now</button></a>");
	  $("#applybutton2").html("<a href=\"javascript:login();\"><button class=\"applynow\" type=\"submit\">Apply Now</button></a>");
	 }
	 }

    function registerAttempt()
    {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var cpassword = document.getElementById("cpassword").value;
      var email = document.getElementById("email").value;
      if(password == "" | username == "" | email == "")
      {
        document.getElementById("username").placeholder = "Must be filled.";
        document.getElementById("password").placeholder = "Must be filled.";
        document.getElementById("cpassword").placeholder = "Must be filled.";
        document.getElementById("email").placeholder = "Must be filled.";
      }else if(password==cpassword)
      {
        window.localStorage.setItem("username",document.getElementById("username").value);
        window.localStorage.setItem("password",document.getElementById("cpassword").value);
        window.localStorage.setItem("email",document.getElementById("email").value);
        var storedUsername = localStorage.getItem("username");
        var storedPassword = localStorage.getItem("password");
        var storedEmail = localStorage.getItem("email");
        $(".physicalregisterform").html("<a href=\"javascript:register();\"><i class=\"fa fa-times fa-2x\" style=\"float:right;\"></i></a><p><font style=\"font-size: 20px;\">Register: Success!</font><br/><font style=\"font-size: 12px;\"><i>Let's help you get your dream job.</i></font><br/><br/>These are the details you have signed up with...<p><b>Username:</b> " + storedUsername + "</p><p><b>Password:</b> " + storedPassword + "</p><p><b>Email Address:</b> " + storedEmail + "</p><p>Now all you need to do is sign in using the sign in form supplied and you can begin to search for jobs!</p>");
      }else{
        document.getElementById("password").style.borderColor = "#c0392b";
        document.getElementById("password").style.backgroundColor = "#e74c3c";
        document.getElementById("cpassword").style.borderColor = "#c0392b";
        document.getElementById("cpassword").style.backgroundColor = "#e74c3c";
      }
    }

    function loginSuccess()
    {
		var url = window.location.pathname;
		var filename = url.substring(url.lastIndexOf('/')+1);
      var loginusername = document.getElementById("loginusername").value;
      var loginpassword = document.getElementById("loginpassword").value;
	  var storedJobs = localStorage.getItem("savedjobscount");
      var storedUsername = localStorage.getItem("username");
      var storedPassword = localStorage.getItem("password");
      var storedEmail = localStorage.getItem("email");
      if(loginpassword!=storedPassword)
      {
        $(".physicalloginform").html("<a href=\"javascript:login();\"><i class=\"fa fa-times fa-2x\" style=\"float:right;\"></i></a><p><font style=\"font-size: 20px;\">Login Failed</font><br/><font style=\"font-size: 12px;\"><i>Oops, something went wrong.</i></font><br/><br/><font style=\"font-size: 16px;\"><p style=\"text-align:center;\">You're supplied username and/or password was incorrect.</p><br/><p style=\"text-align:center;\"><button id=\"logoutSubmit\" class=\"logoutButton\" type=\"submit\" onclick=\"reloadLogin();\">Try Again</button></p></font>");
          $("#logoutSubmit").focus();
      }else if(loginusername == storedUsername && loginpassword == storedPassword)
      {
	  $(".topbar").html("<span><a href=\"javascript:LogMeOut();\">Logout</a></span><span id=\"savedJobs\">Saved Jobs("+ storedJobs +")</span><span>Welcome, "+ storedUsername +"!</span>");
        $("#loginform").fadeToggle();
        window.localStorage.setItem("loggedIn","yes");
		if(filename = "desc.html")
			{
					var applyID = document.getElementById("jobIDForApply").value;
					location.href = 'apply.html?id='+applyID;
			}else{
		location.reload();
		}
      }else if(loginusername == storedEmail && loginpassword == storedPassword)
	  {
	  $(".topbar").html("<span><a href=\"javascript:LogMeOut();\">Logout</a></span><span id=\"savedJobs\">Saved Jobs("+ storedJobs +")</span><span>Welcome, "+ storedUsername +"!</span>");
        $("#loginform").fadeToggle();
		window.localStorage.setItem("loggedIn","yes");
		location.reload();
	  }else{
	  $(".physicalloginform").html("<a href=\"javascript:login();\"><i class=\"fa fa-times fa-2x\" style=\"float:right;\"></i></a><p><font style=\"font-size: 20px;\">Login Failed</font><br/><font style=\"font-size: 12px;\"><i>Oops, something went wrong.</i></font><br/><br/><font style=\"font-size: 16px;\"><p style=\"text-align:center;\">Your supplied username and/or password was incorrect.</p><br/><p style=\"text-align:center;\"><button id=\"logoutSubmit\" class=\"logoutButton\" type=\"submit\" onclick=\"reloadLogin();\">Try Again</button></p></font>");
	  }
    }

    function LogMeOut()
    {
	  var storedJobs = localStorage.getItem("savedjobscount");
      $(".topbar").html("<span id=\"savedJobs\">Saved Jobs("+ storedJobs +")</span><span><a href=\"javascript:login();\">Sign In</a></span><span><a href=\"javascript:register();\">Register</a></span>");
      $(".physicalregisterform").html("<a href=\"javascript:register();\"><i class=\"fa fa-times fa-2x\" style=\"float:right;\"></i></a><p><font style=\"font-size: 20px;\">Register</font><br/><font style=\"font-size: 12px;\"><i>Get that steady pay cheque you've akways wanted...</i></font><br/><br/><font style=\"font-size: 16px;\"><p><div class=\"formLabel\">Username:</div><div class=\"formField\"><input type=\"text\" size=\"10px\" placeholder=\"Username\" style=\"color: #000000; width: 100%;\" id=\"username\"></div></p><p><div class=\"formLabel\">Password:</div><div class=\"formField\"><input type=\"password\" size=\"10px\" placeholder=\"Password\" style=\"color: #000000; width: 100%;\" id=\"password\"></div></p><p><div class=\"formLabel\">Confirm Password:</div><div class=\"formField\"><input type=\"password\" size=\"10px\" placeholder=\"Confirm Password\" style=\"color: #000000; width: 100%;\" id=\"cpassword\"></div></p><p><div class=\"formLabel\">Email Address:</div><div class=\"formField\"><input type=\"text\" size=\"10px\" placeholder=\"Email Address\" style=\"color: #000000; width: 100%;\" id=\"email\"></div></p><br/><br/><p><div class=\"formLabel\"></div><div class=\"formButton\"><button id=\"registrationSubmit\" class=\"registrationButton\" type=\"submit\" onclick=\"registerAttempt();\">Register</button><button class=\"registrationButton\" type=\"reset\">Reset</button></div></p></font><br/><br/>");
      window.localStorage.setItem("loggedIn","no");
      confirmLogOut();
	  $("#applybutton1").html("<a href=\"javascript:login();\"><button class=\"savejob smallapply pull-right\" type=\"button\">Apply Now</button></a>");
	  $("#applybutton2").html("<a href=\"javascript:login();\"><button class=\"applynow\" type=\"submit\">Apply Now</button></a>");
    }

    function reloadLogin()
    {
      $(".physicalloginform").html("<a href=\"javascript:login();\"><i class=\"fa fa-times fa-2x\" style=\"float:right;\"></i></a><p><font style=\"font-size: 20px;\">Login</font><br/><font style=\"font-size: 12px;\"><i>Job searching personalised to you.</i></font><br/><br/><font style=\"font-size: 16px;\"><p><div class=\"formLabel\">Username/Email:</div><div class=\"formField\"><input type=\"text\" size=\"10px\" placeholder=\"Username/Email Address\" style=\"color: #000000; width: 100%;\" id=\"loginusername\"></div></p><p><div class=\"formLabel\">Password:</div><div class=\"formField\"><input type=\"password\" size=\"10px\" placeholder=\"Password\" style=\"color: #000000; width: 100%;\" id=\"loginpassword\"></div></p><br/><br/><p><div class=\"formLabel\"></div><div class=\"formButton\"><button id=\"registrationSubmit\" class=\"registrationButton\" type=\"submit\" onclick=\"loginSuccess();\">Login</button><button class=\"registrationButton\" type=\"reset\">Reset</button></div></p></font><br/><br/>");
    }

    function submitSearch()
    {
	  var appliedPosition = document.getElementById("searchPosition").value;
	  var appliedPostcode = document.getElementById("searchPostcode").value;
	  var appliedDistance = document.getElementById("searchDistance").value;
	  if(appliedPosition == "" | appliedPostcode == "" | appliedDistance == "")
	  {
	  confirmSeenAlert();
	  }else{
	  window.localStorage.setItem("position",appliedPosition);
      window.localStorage.setItem("postcode",appliedPostcode);
      window.localStorage.setItem("distance",appliedDistance);
      window.location.href = "list.html";
	  }
    }
	
	function refineSearch()
	{
		var changedDistance = document.getElementById("refineDistance").value;
		var storedPosition = localStorage.getItem("position");
    var storedPostcode = localStorage.getItem("postcode")
    var changedSalary = document.getElementById("refineSalary").value;
    var changedType = document.getElementById("refineType").value;
    var changedDate = document.getElementById("refineDate").value;

		if(changedDistance == "5miles" && changedSalary == "35plus" && changedType == "perm" && changedDate == "week" && storedPosition == "web" || changedDistance == "5miles" && changedSalary == "35plus" && changedType == "perm" && changedDate == "week" && storedPosition == "Web")
		{
			$("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>UX DESIGNER, <span>TECH NINE</span><img class=\"emplogo pull-right\" src=\"img/logos/tech.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('TechNineSaved','6');\">Save Job <i class=\"fa fa-star\" id=\"6\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=6\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£40,000 - £70,000 per annum</li><li>Southampton</li><li>Posted: 08/03/2015</li><li>Application Deadline: 31/03/215</li></ul><p class=\"resulttext\">The role of a UX designer is to analyze and create user interfaces for web applications amongst many other areas. Your work will be assessed by our test team as well as developed further by our two tier development team. </p></div></div>");

          $("#resultsAmount").html("1");
      $("#distanceQuery").html("<span id=\"resultsAmount\">1</span> <b>"+storedPosition+"</b> jobs found within <b>5 miles</b> of <b>"+storedPostcode+"</b>");

		}

    else if(changedDistance == "20milesplus" && changedSalary == "35" && changedType == "perm" && changedDate == "week" && storedPosition == "sales" || changedDistance == "20milesplus" && changedSalary == "35" && changedType == "perm" && changedDate == "week" && storedPosition == "Sales")
    {
      $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>STORE MANAGER, <span>SUPERDRY</span><img class=\"emplogo pull-right\" src=\"img/logos/superdry.jpg\" alt=\"Superdry Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('SuperdrySaved','2');\">Save Job <i class=\"fa fa-star\" id=\"2\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=2\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>Bournemouth</li><li>Posted: 11/03/2015</li><li>Application Deadline: 30/05/2015</li></ul><p class=\"resulttext\">To assume overall management responsibility for the store ensuring exceptional operational and commercial standards within agreed budgets. To lead by example, maximizing and driving store sales, performance and profitability through the development, management, support and direction of the store team, ultimately delivering SuperGroup’s key business objectives.</p></div></div>");

      $("#resultsAmount").html("1");

      $("#distanceQuery").html("<span id=\"resultsAmount\">1</span> <b>"+storedPosition+"</b> jobs found greater than <b>20 miles</b> of <b>"+storedPostcode+"</b>");
    }

    else if(changedDistance == "20milesplus" && changedSalary == "25" && changedType == "temp" && changedDate == "month" && storedPosition == "hr" || changedDistance == "20milesplus" && changedSalary == "25" && changedType == "temp" && changedDate == "month" && storedPosition == "HR")
    {

      $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR ASSISTANT, <span>THE IMPACT LABEL</span><img class=\"emplogo pull-right\" src=\"img/logos/impact.png\" alt=\"Impact Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('ImpactSaved','9');\">Save Job <i class=\"fa fa-star\" id=\"9\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=9\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£17,500 - £20,000 per annum</li><li>Dorset</li><li>Posted: 04/03/2015</li><li>Application Deadline: 24/03/2015</li></ul><p class=\"resulttext\">The role of a HR assistant is to document and compile all employee files and personas. Regular employee checks are required in order to update information of each employee.</p></div></div>");

      $("#resultsAmount").html("1");
      $("#distanceQuery").html("<span id=\"resultsAmount\">1</span> <b>"+storedPosition+"</b> jobs found greater than <b>20 miles</b> of <b>"+storedPostcode+"</b>");
    }
    else 
    {
      if(storedPosition == "Sales" || storedPosition == "sales")
      {
      $("#mockupmessage").html("<p style=\"text-align:center;\">As this is just an interactive mockup, certainly elements do not function as they would if implented into a real world website.</p><p style=\"text-align:center;\">To demonstrate the refinement of your sales listings, please set the dropdown menus to the following values:</p><p style=\"text-align:center;\">Distance: 20 miles +<br />Salary: £25,000 - £35,000<br/>Job Type: Permanent<br />Posted: This Week</p><br/>")
      confirmMockupSeenAlert();
      }
      else if(storedPosition == "Web" || storedPosition == "web")
      {
      $("#mockupmessage").html("<p style=\"text-align:center;\">As this is just an interactive mockup, certainly elements do not function as they would if implented into a real world website.</p><p style=\"text-align:center;\">To demonstrate the refinement of your sales listings, please set the dropdown menus to the following values:</p><p style=\"text-align:center;\">Distance: 5 miles <br />Salary: £35,000 +<br/>Job Type: Permanent<br />Posted: This Week</p><br/>")
      confirmMockupSeenAlert();
      }
      else if(storedPosition == "hr" || storedPosition == "HR")
      {
      $("#mockupmessage").html("<p style=\"text-align:center;\">As this is just an interactive mockup, certainly elements do not function as they would if implented into a real world website.</p><p style=\"text-align:center;\">To demonstrate the refinement of your sales listings, please set the dropdown menus to the following values:</p><p style=\"text-align:center;\">Distance: 20 miles + <br />Salary: £15,00 - £25,000<br/>Job Type: Temporary<br />Posted: This Month</p><br/>")
      confirmMockupSeenAlert();
      }

      //$("#entireResults").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>Search Results</h4><p class=\"resulttext\">To test refinement settings...</p><p class=\"resulttext\">If you are searching for 'sales' jobs: please refine to this data: '5 miles, 35k+, Permanent, This Week'</p><p class=\"resulttext\">If you are searching for 'web' jobs: please refine to this data: '20+ miles, 25k-35k, permanent, this week'</p><p class=\"resulttext\">If you are searching for 'hr' jobs: please refine to this data: '20+ miles, 15k-25k, temporary, this month'</p><p><a href='list.html' class='backLink'><i class=\"fa fa-angle-left\"> Back to search results</a></i></div></div>");
    //$("#resultsAmount").html("0");
    }


    
	}

    function loadSearchQuery()
    {
      var storedDistance = localStorage.getItem("distance");
      var storedPostcode = localStorage.getItem("postcode");
      var storedPosition = localStorage.getItem("position");
      if(storedDistance == "5miles")
      {
      $("#distanceQuery").html("<span id=\"resultsAmount\"></span> <b>"+storedPosition+"</b> jobs found within <b>5 miles</b> of <b>"+storedPostcode+"</b>");
    }else if(storedDistance == "10miles"){
      $("#distanceQuery").html("<span id=\"resultsAmount\"></span> <b>"+storedPosition+"</b> jobs found within <b>10 miles</b> of <b>"+storedPostcode+"</b>");
    }else if(storedDistance == "15miles"){
      $("#distanceQuery").html("<span id=\"resultsAmount\"></span> <b>"+storedPosition+"</b> jobs found within <b>15 miles</b> of <b>"+storedPostcode+"</b>");
    }else if(storedDistance == "20milesplus"){
      $("#distanceQuery").html("<span id=\"resultsAmount\"></span> <b>"+storedPosition+"</b> jobs found greater than <b>20 miles</b> of <b>"+storedPostcode+"</b>");
    }
  }

    function saveJob(job, star)
  {
    $("#"+star+"").css('color','#f1c40f');
    var jobCheck = localStorage.getItem(job);
      if(jobCheck == "yes")
      {
        confirmJobAlreadySaved();
      }else{
    var savedJobsCount = localStorage.getItem("savedjobscount");
      if(savedJobsCount === null)
      {
        window.localStorage.setItem(job,"yes");
        window.localStorage.setItem("savedjobscount","1");
        $("#savedJobs").html("Saved Jobs("+localStorage.savedjobscount+")");
      }else{
        window.localStorage.setItem(job,"yes");
        localStorage.savedjobscount = parseInt(localStorage.savedjobscount) +1;
        $("#savedJobs").html("Saved Jobs("+localStorage.savedjobscount+")");
      }
    }
  }

    function loadSavedJobs()
    {
      var savedJobsCount = localStorage.getItem("savedjobscount");
      if(savedJobsCount === null)
      {
        window.localStorage.setItem("savedjobscount","0");
        window.localStorage.setItem("SkySaved","no");
        window.localStorage.setItem("SuperdrySaved","no");
        window.localStorage.setItem("VirginSaved","no");
        window.localStorage.setItem("JohnLewisSaved","no");
        window.localStorage.setItem("OmniSaved","no");
        window.localStorage.setItem("TechNineSaved","no");
        window.localStorage.setItem("TechLineSaved","no");
        window.localStorage.setItem("RoyalBarretSaved","no");
        window.localStorage.setItem("ImpactSaved","no");
        window.localStorage.setItem("BloomingSaved","no");
        window.localStorage.setItem("IlluminationSaved","no");
        window.localStorage.setItem("LearningCurveSaved","no");
      }
      $("#savedJobs").html("Saved Jobs("+localStorage.savedjobscount+")");
    }

    function loadCompleteSavedJobsList()
    {
      var savedJobsCount = localStorage.getItem("savedjobscount");
      $("#savedJobsCounter").html(savedJobsCount);
      var SkySaved = localStorage.getItem("SkySaved");
      var SuperdrySaved = localStorage.getItem("SuperdrySaved");
      var VirginSaved = localStorage.getItem("VirginSaved");
      var JohnLewisSaved = localStorage.getItem("JohnLewisSaved");
      var OmniSaved = localStorage.getItem("OmniSaved");
      var TechNineSaved = localStorage.getItem("TechNineSaved");
      var TechLineSaved = localStorage.getItem("TechLineSaved");
      var RoyalBarretSaved = localStorage.getItem("RoyalBarretSaved");
      var ImpactSaved = localStorage.getItem("ImpactSaved");
      var BloomingSaved = localStorage.getItem("BloomingSaved");
      var IlluminationSaved = localStorage.getItem("IlluminationSaved");
      var LearningCurveSaved = localStorage.getItem("LearningCurveSaved");

      if (savedJobsCount == "0"){
        $("#errorSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>Saved Jobs</h4><p class=\"resulttext\">There are no jobs currently saved.</p></div></div>");
      }
      if(SkySaved == "yes")
      {
        $("#SkySaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>RETAIL SALES ADVISOR, <span>SKY RETAIL STORES</span><img class=\"emplogo pull-right\" src=\"img/logos/skylogo.jpg\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('SkySaved','#SkySaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=1\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Southampton</li><li>Posted: 12/02/2015</li><li>Application Deadline: 23/02/215</li></ul><p class=\"resulttext\">If you're the kind of person who believes in quality entertainment, cutting edge technology and great communication, working for Sky could be for you.</p><div class=\"read-more\"><div id=\"read-even-more\"></div></div></div></div>");
      }
      if(SuperdrySaved == "yes")
      {
        $("#SuperdrySaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>STORE MANAGER, <span>SUPERDRY</span><img class=\"emplogo pull-right\" src=\"img/logos/superdry.jpg\" alt=\"Superdry Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('SuperdrySaved','#SuperdrySaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=2\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>Bournemouth</li><li>Posted: 11/03/2015</li><li>Application Deadline: 30/05/2015</li></ul><p class=\"resulttext\">To assume overall management responsibility for the store ensuring exceptional operational and commercial standards within agreed budgets. To lead by example, maximizing and driving store sales, performance and profitability through the development, management, support and direction of the store team, ultimately delivering SuperGroup’s key business objectives.</p></div></div>");
      }
      if(VirginSaved == "yes")
      {
        $("#VirginSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>PHONE SALES ASSISTANT, <span>VIRGIN MEDIA</span><img class=\"emplogo pull-right\" src=\"img/logos/virgin.jpg\" alt=\"Virgin Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('VirginSaved','#VirginSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=3\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Winchester</li><li>Posted: 28/02/2015</li><li>Application Deadline: 20/04/2015</li></ul><p class=\"resulttext\">Our customers expect to be dazzled. Whether it’s TV, mobile, home phone or super-fast broadband services across the UK, at Virgin Media we’re 110% focused on making their lives easier, richer and a little bit more fun.</p></div></div>");
      }
      if(JohnLewisSaved == "yes")
      {
        $("#JohnLewisSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>SELLING ASSISTANT, <span>JOHN LEWIS</span><img class=\"emplogo pull-right\" src=\"img/logos/johnlewis.jpg\" alt=\"John Lewis Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('JohnLewisSaved','#JohnLewisSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=4\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£12,000 per annum</li><li>Horsham</li><li>Posted: 23/01/2015</li><li>Application Deadline: 15/03/2015</li></ul><p class=\"resulttext\">You will focus on achieving teams sales targets through a focus on selling and the delivery of a market leading customer experience. To add value to the efficient and profitable running of your department in order to achieve your business and personal objectives, along with those of your team and the branch.</p></div></div>");
      }
      if(OmniSaved == "yes")
      {
        $("#OmniSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>FRONT-END DEVELOPER, <span>OMNI GROUP</span><img class=\"emplogo pull-right\" src=\"img/logos/omni_group.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('OmniSaved','#OmniSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=5\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£30,000 - £45,000 per annum</li><li>Southampton</li><li>Posted: 02/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Within this occupation your main responsibilities will be to design and develop client websites to specialist and specific needs. With good co-operation skills with clients as well as extensive knowledge of basic web languages, a limited knowledge of complex languages such as JavaScript is also desired.</p></div></div>");
      }
      if(TechNineSaved == "yes")
      {
        $("#TechNineSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>UX DESIGNER, <span>TECH NINE</span><img class=\"emplogo pull-right\" src=\"img/logos/tech.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('TechNineSaved','#TechNineSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=6\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£40,000 - £70,000 per annum</li><li>Southampton</li><li>Posted: 08/03/2015</li><li>Application Deadline: 31/03/215</li></ul><p class=\"resulttext\">The role of a UX designer is to analyze and create user interfaces for web applications amongst many other areas. Your work will be assessed by our test team as well as developed further by our two tier development team. </p></div></div>");
      }
      if(TechLineSaved == "yes")
      {
        $("#TechLineSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>JUNIOR BACK-END DEVELOPER, <span>TECHLINE INNOVATION</span><img class=\"emplogo pull-right\" src=\"img/logos/techline.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('TechLineSaved','#TechLineSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=7\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Internship</li><li>£250 per month</li><li>Southampton</li><li>Posted: 06/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Internship open for last year university students. Under the watchful eye of our back end team the perfect intern will possess a good knowledge of web languages such as PHP and SQL within a database environment. Must also understand basic ERD systems.</p></div></div>");
      }
      if(RoyalBarretSaved == "yes")
      {
        $("#RoyalBarretSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>HR OFFICER, <span>ROYAL BARRET DESIGNS</span><img class=\"emplogo pull-right\" src=\"img/logos/barret.png\" alt=\"Barret Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('RoyalBarretSaved','#RoyalBarretSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=8\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>London</li><li>Posted: 06/03/2015</li><li>Application Deadline: 26/03/2015</li></ul><p class=\"resulttext\">Being a HR officer entails the employee to handle colleague complaints from all 4 call centres. Whilst being discreet it will also be essential to analyze every detail into problem solving.</p></div></div>");
      }
      if(ImpactSaved == "yes")
      {
        $("#ImpactSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>HR ASSISTANT, <span>THE IMPACT LABEL</span><img class=\"emplogo pull-right\" src=\"img/logos/impact.png\" alt=\"Impact Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('ImpactSaved','#ImpactSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=9\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£17,500 - £20,000 per annum</li><li>Dorset</li><li>Posted: 04/03/2015</li><li>Application Deadline: 24/03/2015</li></ul><p class=\"resulttext\">The role of a HR assistant is to document and compile all employee files and personas. Regular employee checks are required in order to update information of each employee.</p></div></div>");
      }
      if(BloomingSaved == "yes")
      {
        $("#BloomingSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>ER MANAGER, <span>BLOOMING SELLARS</span><img class=\"emplogo pull-right\" src=\"img/logos/blooming.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('BloomingSaved','#BloomingSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=10\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£55,000 - £65,000 per annum</li><li>Southampton</li><li>Posted: 10/03/2015</li><li>Application Deadline: 30/03/2015</li></ul><p class=\"resulttext\">The responsibilities of an ER manager include an oversight upon all employees working within the business as well as a role of absolute importance within decision-making within employee discrepancy scenarios. Ideal candidate will come with at least 10 years experience of HR.</p></div></div>");
      }
      if(IlluminationSaved == "yes")
      {
        $("#IlluminationSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>JUNIOR HR REPRESENTATIVE, <span>ILLUMINATION</span><img class=\"emplogo pull-right\" src=\"img/logos/Illumination.png\" alt=\"Illumination Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('IlluminationSaved','#IlluminationSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=11\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£16,000 - £21,000 per annum</li><li>Fareham</li><li>Posted: 27/02/2015</li><li>Application Deadline: 17/03/2015</li></ul><p class=\"resulttext\">As a HR representative your role will be to take all employee complaints and queries. With this information it will then be your duty to pass on and assist with any analysis taken out by higher-level HR personnel.</p></div></div>");
      }
      if(LearningCurveSaved == "yes")
      {
        $("#LearningCurveSaved").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>HR DATABASE ASSISTANT, <span>LEARNING CURVE INITIATIVE</span><img class=\"emplogo pull-right\" src=\"img/logos/learning.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"removeJob('LearningCurveSaved','#LearningCurveSaved');\">Remove Job <i class=\"fa fa-trash\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=12\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£27,000 - £32,000 per annum</li><li>Southampton</li><li>Posted: 09/03/2015</li><li>Application Deadline: 29/03/2015</li></ul><p class=\"resulttext\">The role of a HR database assistant will be to add all details of an employee to an electronic database. This must be kept secure and only be visible to the correct members of authority. A candidate of 10 years experience or more is required.</p></div></div>");
      }
    }

    function removeJob(job,content)
    {
      window.localStorage.setItem(job,"no");
      localStorage.savedjobscount = parseInt(localStorage.savedjobscount) -1;
      var savedJobsCount = localStorage.getItem("savedjobscount");
      $("#savedJobs").html("Saved Jobs("+localStorage.savedjobscount+")");
      $("#savedJobsCounter").html(savedJobsCount);
      $(content).html("");
    }

	
	function loadResults()
	{
		var storedDistance = localStorage.getItem("distance");
		var storedPostcode = localStorage.getItem("postcode");
		var savedPosition = localStorage.getItem("position");
    var sortby = document.getElementById("sortby").value;


    if(storedDistance == "5miles")
    {

    $("#loadRefineMiles").html("<select class=\"form-control refineselect\" id=\"refineDistance\"><option value=\"5miles\" selected=\"selected\">5 miles</option><option value=\"10miles\">10 miles</option><option value=\"15miles\">15 miles</option><option value=\"20milesplus\">20 miles +</option></select>");
    }else if(storedDistance == "10miles"){
      $("#loadRefineMiles").html("<select class=\"form-control refineselect\" id=\"refineDistance\"><option value=\"5miles\">5 miles</option><option value=\"10miles\" selected=\"selected\">10 miles</option><option value=\"15miles\">15 miles</option><option value=\"20milesplus\">20 miles +</option></select>");
    }else if(storedDistance == "15miles"){
      $("#loadRefineMiles").html("<select class=\"form-control refineselect\" id=\"refineDistance\"><option value=\"5miles\">5 miles</option><option value=\"10miles\">10 miles</option><option value=\"15miles\" selected=\"selected\">15 miles</option><option value=\"20milesplus\">20 miles +</option></select>");
    }else if(storedDistance == "20milesplus"){
      $("#loadRefineMiles").html("<select class=\"form-control refineselect\" id=\"refineDistance\"><option value=\"5miles\">5 miles</option><option value=\"10miles\">10 miles</option><option value=\"15miles\">15 miles</option><option value=\"20milesplus\" selected=\"selected\">20 miles +</option></select>");
    }
		
    if(savedPosition == "sales" | savedPosition == "Sales")
		{

    if(sortby == "relevant")
    { 
		$("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>RETAIL SALES ADVISOR, <span>SKY RETAIL STORES</span><img class=\"emplogo pull-right\" src=\"img/logos/skylogo.jpg\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('SkySaved','1');\">Save Job <i class=\"fa fa-star\" id=\"1\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=1\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Southampton</li><li>Posted: 12/02/2015</li><li>Application Deadline: 23/02/215</li></ul><p class=\"resulttext\">If you're the kind of person who believes in quality entertainment, cutting edge technology and great communication, working for Sky could be for you.</p><div class=\"read-more\"><div id=\"read-even-more\"></div></div></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>STORE MANAGER, <span>SUPERDRY</span><img class=\"emplogo pull-right\" src=\"img/logos/superdry.jpg\" alt=\"Superdry Logo\"></h4><button class=\"savejob pull-right\" type=\"button\"  onclick=\"saveJob('SuperdrySaved','2');\">Save Job <i class=\"fa fa-star\" id=\"2\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=2\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>Bournemouth</li><li>Posted: 11/03/2015</li><li>Application Deadline: 30/05/2015</li></ul><p class=\"resulttext\">To assume overall management responsibility for the store ensuring exceptional operational and commercial standards within agreed budgets. To lead by example, maximizing and driving store sales, performance and profitability through the development, management, support and direction of the store team, ultimately delivering SuperGroup’s key business objectives.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>PHONE SALES ASSISTANT, <span>VIRGIN MEDIA</span><img class=\"emplogo pull-right\" src=\"img/logos/virgin.jpg\" alt=\"Virgin Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('VirginSaved','3');\">Save Job <i class=\"fa fa-star\" id =\"3\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=3\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Winchester</li><li>Posted: 28/02/2015</li><li>Application Deadline: 20/04/2015</li></ul><p class=\"resulttext\">Our customers expect to be dazzled. Whether it’s TV, mobile, home phone or super-fast broadband services across the UK, at Virgin Media we’re 110% focused on making their lives easier, richer and a little bit more fun.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>SELLING ASSISTANT, <span>JOHN LEWIS</span><img class=\"emplogo pull-right\" src=\"img/logos/johnlewis.jpg\" alt=\"John Lewis Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('JohnLewisSaved','4');\">Save Job <i class=\"fa fa-star\" id=\"4\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=4\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£12,000 per annum</li><li>Horsham</li><li>Posted: 23/01/2015</li><li>Application Deadline: 15/03/2015</li></ul><p class=\"resulttext\">You will focus on achieving teams sales targets through a focus on selling and the delivery of a market leading customer experience. To add value to the efficient and profitable running of your department in order to achieve your business and personal objectives, along with those of your team and the branch.</p></div></div>");
		$("#resultsAmount").html("4");
    }

    else if(sortby == "recent")
    {
      $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>STORE MANAGER, <span>SUPERDRY</span><img class=\"emplogo pull-right\" src=\"img/logos/superdry.jpg\" alt=\"Superdry Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('SuperdrySaved','2');\">Save Job <i class=\"fa fa-star\" id=\"2\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=2\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>Bournemouth</li><li>Posted: 11/03/2015</li><li>Application Deadline: 30/05/2015</li></ul><p class=\"resulttext\">To assume overall management responsibility for the store ensuring exceptional operational and commercial standards within agreed budgets. To lead by example, maximizing and driving store sales, performance and profitability through the development, management, support and direction of the store team, ultimately delivering SuperGroup’s key business objectives.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>PHONE SALES ASSISTANT, <span>VIRGIN MEDIA</span><img class=\"emplogo pull-right\" src=\"img/logos/virgin.jpg\" alt=\"Virgin Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('VirginSaved', '3');\">Save Job <i class=\"fa fa-star\" id=\"3\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=3\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Winchester</li><li>Posted: 28/02/2015</li><li>Application Deadline: 20/04/2015</li></ul><p class=\"resulttext\">Our customers expect to be dazzled. Whether it’s TV, mobile, home phone or super-fast broadband services across the UK, at Virgin Media we’re 110% focused on making their lives easier, richer and a little bit more fun.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>RETAIL SALES ADVISOR, <span>SKY RETAIL STORES</span><img class=\"emplogo pull-right\" src=\"img/logos/skylogo.jpg\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\"  onclick=\"saveJob('SkySaved','1');\">Save Job <i class=\"fa fa-star\" id=\"1\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=1\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£14,000 per annum</li><li>Southampton</li><li>Posted: 12/02/2015</li><li>Application Deadline: 23/02/215</li></ul><p class=\"resulttext\">If you're the kind of person who believes in quality entertainment, cutting edge technology and great communication, working for Sky could be for you.</p><div class=\"read-more\"><div id=\"read-even-more\"></div></div></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>SELLING ASSISTANT, <span>JOHN LEWIS</span><img class=\"emplogo pull-right\" src=\"img/logos/johnlewis.jpg\" alt=\"John Lewis Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('JohnLewisSaved','4');\">Save Job <i class=\"fa fa-star\" id=\"4\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=4\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£12,000 per annum</li><li>Horsham</li><li>Posted: 23/01/2015</li><li>Application Deadline: 15/03/2015</li></ul><p class=\"resulttext\">You will focus on achieving teams sales targets through a focus on selling and the delivery of a market leading customer experience. To add value to the efficient and profitable running of your department in order to achieve your business and personal objectives, along with those of your team and the branch.</p></div></div>");
      $("#resultsAmount").html("4");
    }

		}
    else if(savedPosition == "web" | savedPosition == "Web")
		{
      if(sortby == "relevant")
    { 
		$("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>FRONT-END DEVELOPER, <span>OMNI GROUP</span><img class=\"emplogo pull-right\" src=\"img/logos/omni_group.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('OmniSaved','5');\">Save Job <i class=\"fa fa-star\" id=\"5\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=5\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£30,000 - £45,000 per annum</li><li>Southampton</li><li>Posted: 02/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Within this occupation your main responsibilities will be to design and develop client websites to specialist and specific needs. With good co-operation skills with clients as well as extensive knowledge of basic web languages, a limited knowledge of complex languages such as JavaScript is also desired.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>UX DESIGNER, <span>TECH NINE</span><img class=\"emplogo pull-right\" src=\"img/logos/tech.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('TechNineSaved','6');\">Save Job <i class=\"fa fa-star\" id=\"6\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=6\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£40,000 - £70,000 per annum</li><li>Southampton</li><li>Posted: 08/03/2015</li><li>Application Deadline: 31/03/215</li></ul><p class=\"resulttext\">The role of a UX designer is to analyze and create user interfaces for web applications amongst many other areas. Your work will be assessed by our test team as well as developed further by our two tier development team. </p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>JUNIOR BACK-END DEVELOPER, <span>TECHLINE INNOVATION</span><img class=\"emplogo pull-right\" src=\"img/logos/techline.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('TechLineSaved','7');\">Save Job <i class=\"fa fa-star\" id=\"7\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=7\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Internship</li><li>£250 per month</li><li>Southampton</li><li>Posted: 06/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Internship open for last year university students. Under the watchful eye of our back end team the perfect intern will possess a good knowledge of web languages such as PHP and SQL within a database environment. Must also understand basic ERD systems.</p></div></div>");
		$("#resultsAmount").html("3");
      }
      else if(sortby == "recent")
      {
        $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>UX DESIGNER, <span>TECH NINE</span><img class=\"emplogo pull-right\" src=\"img/logos/tech.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('TechNineSaved','6');\">Save Job <i class=\"fa fa-star\" id=\"6\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=6\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£40,000 - £70,000 per annum</li><li>Southampton</li><li>Posted: 08/03/2015</li><li>Application Deadline: 31/03/215</li></ul><p class=\"resulttext\">The role of a UX designer is to analyze and create user interfaces for web applications amongst many other areas. Your work will be assessed by our test team as well as developed further by our two tier development team. </p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>FRONT-END DEVELOPER, <span>OMNI GROUP</span><img class=\"emplogo pull-right\" src=\"img/logos/omni_group.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('OmniSaved','5');\">Save Job <i class=\"fa fa-star\"  id=\"5\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=5\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£30,000 - £45,000 per annum</li><li>Southampton</li><li>Posted: 02/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Within this occupation your main responsibilities will be to design and develop client websites to specialist and specific needs. With good co-operation skills with clients as well as extensive knowledge of basic web languages, a limited knowledge of complex languages such as JavaScript is also desired.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>JUNIOR BACK-END DEVELOPER, <span>TECHLINE INNOVATION</span><img class=\"emplogo pull-right\" src=\"img/logos/techline.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('TechLineSaved','7');\">Save Job <i class=\"fa fa-star\" id=\"7\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=7\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Internship</li><li>£250 per month</li><li>Southampton</li><li>Posted: 06/03/2015</li><li>Application Deadline: 20/03/215</li></ul><p class=\"resulttext\">Internship open for last year university students. Under the watchful eye of our back end team the perfect intern will possess a good knowledge of web languages such as PHP and SQL within a database environment. Must also understand basic ERD systems.</p></div></div>");
          $("#resultsAmount").html("3");
      }
		}
    else if(savedPosition == "hr" | savedPosition == "HR")
    {
      if(sortby == "relevant")
    { 
    $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR OFFICER, <span>ROYAL BARRET DESIGNS</span><img class=\"emplogo pull-right\" src=\"img/logos/barret.png\" alt=\"Barret Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('RoyalBarretSaved', '8');\">Save Job <i class=\"fa fa-star\" id =\"8\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=8\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>London</li><li>Posted: 06/03/2015</li><li>Application Deadline: 26/03/2015</li></ul><p class=\"resulttext\">Being a HR officer entails the employee to handle colleague complaints from all 4 call centres. Whilst being discreet it will also be essential to analyze every detail into problem solving.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR ASSISTANT, <span>THE IMPACT LABEL</span><img class=\"emplogo pull-right\" src=\"img/logos/impact.png\" alt=\"Impact Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('ImpactSaved','9');\">Save Job <i class=\"fa fa-star\" id=\"9\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=9\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£17,500 - £20,000 per annum</li><li>Dorset</li><li>Posted: 04/03/2015</li><li>Application Deadline: 24/03/2015</li></ul><p class=\"resulttext\">The role of a HR assistant is to document and compile all employee files and personas. Regular employee checks are required in order to update information of each employee.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>ER MANAGER, <span>BLOOMING SELLARS</span><img class=\"emplogo pull-right\" src=\"img/logos/blooming.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('BloomingSaved','10');\">Save Job <i class=\"fa fa-star\" id=\"10\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=10\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£55,000 - £65,000 per annum</li><li>Southampton</li><li>Posted: 10/03/2015</li><li>Application Deadline: 30/03/2015</li></ul><p class=\"resulttext\">The responsibilities of an ER manager include an oversight upon all employees working within the business as well as a role of absolute importance within decision-making within employee discrepancy scenarios. Ideal candidate will come with at least 10 years experience of HR.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>JUNIOR HR REPRESENTATIVE, <span>ILLUMINATION</span><img class=\"emplogo pull-right\" src=\"img/logos/Illumination.png\" alt=\"Illumination Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('IlluminationSaved','11');\">Save Job <i class=\"fa fa-star\" id=\"11\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=11\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£16,000 - £21,000 per annum</li><li>Fareham</li><li>Posted: 27/02/2015</li><li>Application Deadline: 17/03/2015</li></ul><p class=\"resulttext\">As a HR representative your role will be to take all employee complaints and queries. With this information it will then be your duty to pass on and assist with any analysis taken out by higher-level HR personnel.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR DATABASE ASSISTANT, <span>LEARNING CURVE INITIATIVE</span><img class=\"emplogo pull-right\" src=\"img/logos/learning.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('LearningCurveSaved', '12');\">Save Job <i class=\"fa fa-star\" id=\"12\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=12\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£27,000 - £32,000 per annum</li><li>Southampton</li><li>Posted: 09/03/2015</li><li>Application Deadline: 29/03/2015</li></ul><p class=\"resulttext\">The role of a HR database assistant will be to add all details of an employee to an electronic database. This must be kept secure and only be visible to the correct members of authority. A candidate of 10 years experience or more is required.</p></div></div>");
    $("#resultsAmount").html("5");
    }
    else if(sortby == "recent")
      {
        $("#loadedJobs").html("<div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>ER MANAGER, <span>BLOOMING SELLARS</span><img class=\"emplogo pull-right\" src=\"img/logos/blooming.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('BloomingSaved','10');\">Save Job <i class=\"fa fa-star\" id=\"10\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=10\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£55,000 - £65,000 per annum</li><li>Southampton</li><li>Posted: 10/03/2015</li><li>Application Deadline: 30/03/2015</li></ul><p class=\"resulttext\">The responsibilities of an ER manager include an oversight upon all employees working within the business as well as a role of absolute importance within decision-making within employee discrepancy scenarios. Ideal candidate will come with at least 10 years experience of HR.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR DATABASE ASSISTANT, <span>LEARNING CURVE INITIATIVE</span><img class=\"emplogo pull-right\" src=\"img/logos/learning.png\" alt=\"Sky Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('LearningCurveSaved','12');\">Save Job <i class=\"fa fa-star\" id=\"12\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=12\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£27,000 - £32,000 per annum</li><li>Southampton</li><li>Posted: 09/03/2015</li><li>Application Deadline: 29/03/2015</li></ul><p class=\"resulttext\">The role of a HR database assistant will be to add all details of an employee to an electronic database. This must be kept secure and only be visible to the correct members of authority. A candidate of 10 years experience or more is required.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR OFFICER, <span>ROYAL BARRET DESIGNS</span><img class=\"emplogo pull-right\" src=\"img/logos/barret.png\" alt=\"Barret Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('RoyalBarretSaved','8');\">Save Job <i class=\"fa fa-star\" id=\"8\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=8\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Full Time</li><li>£25,000 - £30,000 per annum</li><li>London</li><li>Posted: 06/03/2015</li><li>Application Deadline: 26/03/2015</li></ul><p class=\"resulttext\">Being a HR officer entails the employee to handle colleague complaints from all 4 call centres. Whilst being discreet it will also be essential to analyze every detail into problem solving.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>HR ASSISTANT, <span>THE IMPACT LABEL</span><img class=\"emplogo pull-right\" src=\"img/logos/impact.png\" alt=\"Impact Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('ImpactSaved','9');\">Save Job <i class=\"fa fa-star\" id=\"9\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=9\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£17,500 - £20,000 per annum</li><li>Dorset</li><li>Posted: 04/03/2015</li><li>Application Deadline: 24/03/2015</li></ul><p class=\"resulttext\">The role of a HR assistant is to document and compile all employee files and personas. Regular employee checks are required in order to update information of each employee.</p></div></div><div class=\"row resultlisting\"><div class=\"col-sm-12 refine\"><h4>JUNIOR HR REPRESENTATIVE, <span>ILLUMINATION</span><img class=\"emplogo pull-right\" src=\"img/logos/Illumination.png\" alt=\"Illumination Logo\"></h4><button class=\"savejob pull-right\" type=\"button\" onclick=\"saveJob('IlluminationSaved','11');\">Save Job <i class=\"fa fa-star\" id=\"11\" style='font-size:14px; padding-left:3px;'></i></button><a href=\"desc.html?id=11\"><button class=\"savejob pull-right\" type=\"button\">Read More</button></a><ul class=\"resultlist\"><li>Type: Part Time</li><li>£16,000 - £21,000 per annum</li><li>Fareham</li><li>Posted: 27/02/2015</li><li>Application Deadline: 17/03/2015</li></ul><p class=\"resulttext\">As a HR representative your role will be to take all employee complaints and queries. With this information it will then be your duty to pass on and assist with any analysis taken out by higher-level HR personnel.</p></div></div>");
        $("#resultsAmount").html("5");
      }

    }
    else{
		$("#entireResults").html("<div class=\"row results\"><div class=\"col-sm-12 refine\"><h4>Search Results</h4><p class=\"resulttext\">Your search for '" +savedPosition+ " jobs' resulted in no matches.</p></div></div>");
		$("#resultsAmount").html("0");
		}
	}
	
  function applySubmit()
  {
    var CV = document.getElementById("file").value;
    var coverSubject = document.getElementById("CoverLetterSubjectCount").value;
    var coverLetter = document.getElementById("CoverLetterCount").value;
    var yes = document.getElementById("yes").checked;
    var no = document.getElementById("no").checked;
    var incorrect = 0;

    if (yes == false && no == false) {
    
      var incorrect = 1;
      //blank
      
    }


    
    if (CV == "" || coverSubject == "" || coverLetter == "") {
    
      var incorrect = 1;
      
    }

      if (no == true) {
    
      var incorrect = 2;
      //cant work
      
    }

      if(incorrect==1)
        {
        
          applyError();
          
        }else if(incorrect==2){

          applyErrorLocation();
          
        }else{
          confirmApplySeenAlert();
        }
  }

function confirmApplySeenAlert()
    {
      $("#applySuccessPopup").fadeToggle();
    }

function applyError()
    {
      $("#applicationError").fadeToggle();
    }

function applyErrorLocation()
    {
      $("#applicationErrorLocation").fadeToggle();
    }



  document.body.onload=checkLoggedIn();
  document.body.onload=checkApplyLoggedIn();
  document.body.onload=loadSearchQuery();
  document.body.onload=loadSavedJobs();