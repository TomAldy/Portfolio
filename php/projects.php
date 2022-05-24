<?php
header('Content-Type: application/json; charset=utf-8');
$project = ($_GET['id'] ?? null);
class project {
	function name($term) {
		$this->name = $term;
	}
	function image($term) {
		$this->image = $term;
	}
	function type($term) {
		$this->type = $term;
	}
	function description($term) {
		$this->description = $term;
	}
	function rating($term) {
		$this->rating = $term;
	}
	function url($term) {
		$this->url = $term;
	}
	function languages(array $term) {
		$this->languages = $term;
	}
}

$projects = array();

// Technologies available are listed below.
// html - HTML5
// javascript - JavaScript
// css - CSS3
// ruby - Ruby
// rails - Ruby on Rails
// mysql - MySQL
// php - PHP
// responsive - Responsive

// KeepAnOpenMind Website
$item = new project;
$item->name('KeepAnOpenMind');
$item->image('img/websites/keepanopenmind.png');
$item->type('Website');
$item->rating(3);
$item->url('http://'.getenv('HTTP_HOST').'/websites/'.str_replace(' ', '', strtolower($item->name)));
$item->languages(array('html', 'javascript', 'css', 'ruby', 'mysql', 'php'));
$item->description('Created in 2010, KeepAnOpenMind was a website based around an online, animated game known as Habbo Hotel. The website introduced new technologies to the Habbo fan-website network using HTML, CSS, JavaScript, PHP Graphic Drawing and AJAX. The graphics are primarily pixel-based and the entire design consists of solid colours with contrasting styles.');
$projects[] = $item;

// Rareloop ODL Website
$item = new project;
$item->name('Rareloop Open Device Lab');
$item->image('img/websites/rareloop.png');
$item->type('Website');
$item->rating(2);
$item->url('http://'.getenv('HTTP_HOST').'/websites/'.str_replace(' ', '', strtolower($item->name)));
$item->languages(array('html', 'css', 'responsive'));
$item->description('Created in 2015, this Rareloop Open Device Lab re-design was created for a University Unit Assesment, the objective of this design was to create a website that was aimed at anyone interested in testing their designs or applications on multiple devices. The website is response and relies purely HTML5 and CSS, as to cater for those who do not support the use of JavaScript on their system.');
$projects[] = $item;

// Croma/FastVein
$item = new project;
$item->name('FastVein Time & Attendance');
$item->image('img/websites/fastvein.png');
$item->type('Application');
$item->rating(4);
$item->url('http://www.fastveinta.com');
$item->languages(array('html', 'css', 'javascript', 'ruby', 'responsive'));
$item->description('A 2015 project, FastVein Time & Attendance is a web based application that connects to a program situated within a vein-scanning system, the user scans their finger and data is saved based on where the user scanned their finger and the date and time of the scan. The web interface (developed in Ruby on Rails) then collects the saved data and generates graphs, tables and user profile-specific information that details the attendance of the scanned users.');
$projects[] = $item;

// SteadyPayCheck
$item = new project;
$item->name('SteadyPayCheck');
$item->image('img/websites/steadypaycheck.png');
$item->type('Prototype');
$item->rating(3);
$item->url('http://'.getenv('HTTP_HOST').'/websites/'.str_replace(' ', '', strtolower($item->name)));
$item->languages(array('html', 'css', 'javascript'));
$item->description('Developed in 2014, SteadyPayCheck was a UX prototype design of a job hunting website, developed for a Human Digital Interaction Design Unit in University, the prototype was expected to mimic the functionality of the final product, due to this being the case; the storage facility of the registered users, along with the search functionality is entirely performed using JavaScript language with Local Storage.');
$projects[] = $item;

// EveryoneConnected
$item = new project;
$item->name('EveryoneConnected');
$item->image('img/websites/everyoneconnected.png');
$item->type('Design');
$item->rating(1);
$item->url('http://'.getenv('HTTP_HOST').'/websites/'.str_replace(' ', '', strtolower($item->name)));
$item->languages(array('html', 'css'));
$item->description('Back in 2009, EveryoneConnected was a short-term design project created by myself in order to start entering the world of design in the web industry. The initial intentions of EveryoneConnected was to become a Web Hosting company devoted to offering customers website hosting at a low price.');
$projects[] = $item;

// StarterKit - Pattern Library
$item = new project;
$item->name('StarterKit');
$item->image('img/websites/starterkit.png');
$item->type('Library');
$item->rating(2);
$item->url('http://'.getenv('HTTP_HOST').'/websites/'.str_replace(' ', '', strtolower($item->name)));
$item->languages(array('html', 'css', 'javascript'));
$item->description('Created in 2016, StarterKit (SKit) is a Pattern Library created by myself as a University Unit Assignment and allows users to download a pre-configured set of JavaScript functions and CSS styles, these styles collate together to allow the user to use specific markup to generate components that can be used on their website. The library includes a Navigation Bar, a Jumbotron, basic styling classes for positioning and typography, two icon fonts and more. With progressive enhancement included where needed.');
$projects[] = $item;

// Silverleaf College
$item = new project;
$item->name('Silverleaf College');
$item->image('img/websites/silverleaf.png');
$item->type('Website');
$item->rating(2);
$item->url('http://139.59.165.197:3000/');
$item->languages(array('html', 'css', 'javascript', 'ruby', 'rails'));
$item->description('Created in 2016, the Silverleaf College website was created as a frontend example for a web based staff planning application, developed using Ruby on Rails, the application was created to help users organise their staff\'s weekly plan. The navigation is dynamic and the "Courses" sub-menu changes based on the courses that have been added within the backend of the application.');
$projects[] = $item;

// Hubbal
$item = new project;
$item->name('Hubbal');
$item->image('img/websites/hubbal.png');
$item->type('Application');
$item->rating(4);
$item->url('http://139.59.165.197:3000/dashboard');
$item->languages(array('html', 'css', 'javascript', 'ruby', 'rails'));
$item->description('Created in 2016, Hubbal is the backend counterpart to the Silverleaf College frontend website. Hubbal was created using Ruby on Rails and begins with the login of a user, a set of groups at which users can be held, along with an intergrated messaging system and personal schedule system that allows users to plan their week, with user profiles available to view each individual users week if necessary.');
$projects[] = $item;

switch ($project) {
    case '0':
        $item = $projects[0];
        $json = json_encode($item);
        echo $json;
    break;
    case '1':
        $item = $projects[1];
        $json = json_encode($item);
        echo $json;
    break;
    case '2':
        $item = $projects[2];
        $json = json_encode($item);
        echo $json;
    break;
    case '3':
        $item = $projects[3];
        $json = json_encode($item);
        echo $json;
    break;
    case '4':
        $item = $projects[4];
        $json = json_encode($item);
        echo $json;
    break;
    case '5':
        $item = $projects[5];
        $json = json_encode($item);
        echo $json;
    break;
    case '6':
        $item = $projects[6];
        $json = json_encode($item);
        echo $json;
    break;
    case '7':
        $item = $projects[7];
        $json = json_encode($item);
        echo $json;
    break;
    default:
    	$json = json_encode($projects);
        echo $json;
}