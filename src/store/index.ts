import Vuex, { StoreOptions } from 'vuex'
import { RootState } from './types';

const store: StoreOptions<RootState> = {
    state: {
        darkMode: false,
        portfolio: [
            {
                image: "/img/websites/DevItUp.svg",
                link: "https://www.devitup.co.uk"
            },
            {
                image: "/img/websites/ParkPal.svg",
                link: "https://www.parkpal.co.uk"
            },
            {
                image: "/img/websites/SteadyPayCheck.svg",
                link: "https://steadypaycheck.tomaldy.com"
            },
            {
                image: "/img/websites/StarterKit.svg",
                link: "https://starterkit.tomaldy.com"
            },
            // {
            //     image: "/img/websites/Hubbal.svg",
            //     link: "https://hubbal.tomaldy.com"
            // },
            {
                image: "/img/websites/RareloopOpenDeviceLab.svg",
                link: "https://rareloop-odl.tomaldy.com"
            },
            {
                image: "/img/websites/EveryoneConnected.svg",
                link: "https://everyoneconnected.tomaldy.com"
            },
            {
                image: "/img/websites/FastVein.svg",
                link: "https://www.fastveinta.com"
            },
            // {
            //     image: "/img/websites/SilverleafCollege.svg",
            //     link: "https://silverleafcollege.tomaldy.com"
            // },
        ],
        qualifications: [
            {
                title: 'BSc (Hons) Web Design & Development',
                time: 'September 2013 - May 2016',
                description: 'Within this degree course, I learnt all about the design aspect within the Web industry, thanks to my previous experience in the Web Development sector, this became an advantage over anything else, whilst improving my design skills through university, I could develop my development skills in my spare time at home.',
                grade: 'First (1:1)'
            },
            {
                title: 'IT National Extended Diploma (Multimedia)',
                time: 'September 2011 - July 2013',
                description: 'Throughout the IT specific college course, I developed my basic computing skills, ranging from animation techniques to beginner programming skills, such as object oriented programming and gaming development.',
                grade: 'D*, D*, D*'
            },
            {
                title: 'BTEC Vocational IT Certificate (Advanced)',
                time: 'September 2009 - June 2010',
                description: 'IT level skills at school level, with added advanced options due to taking a choice of optional added qualification, this allowed me to learn animation, manual database development using Microsoft Excel and many more basic computing techniques.',
                grade: 'Merit'
            },
            {
                title: 'BTEC IT Certificate',
                time: 'September 2009 - June 2010',
                description: 'Starting level of IT qualifications, following from personal experience learnt in my home, I was able to develop my IT skills at a basic school level such as Microsoft Word and design analysis.',
                grade: 'Merit'
            },
        ]
    },
    getters: {

    },
    mutations: {
        setDarkMode(state, value: boolean) {
          state.darkMode = value;
          localStorage.setItem('darkMode', value.toString());
        }
    },
    actions: {
        setDarkMode({ commit }, value: boolean) {
            commit('setDarkMode', value);
        }
    },
}

export default new Vuex.Store<RootState>(store);
