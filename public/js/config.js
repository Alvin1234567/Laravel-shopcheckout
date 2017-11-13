function config($stateProvider, $urlRouterProvider, $locationProvider, $ocLazyLoadProvider) {

    $urlRouterProvider.otherwise('/');

    $stateProvider

        // General Routing
        .state('login', {
            url: "/login",
            templateUrl: "views/login.html",
            data: { bg: "img/loginbg.jpg", pageTitle: 'Login', specialClass: "gray-bg bg-coms" },
            resolve: { authenticateSession : authenticateSession }
        })

        .state('/', {
            url: "/",
            data: { bg: "img/loginbg.jpg", pageTitle: 'Login', specialClass: "gray-bg bg-coms" },
            resolve: { authenticateSession : authenticateSession }
        })

        .state('home', {
            abstract: true,
            url: "/home",
            templateUrl: "views/common/content.html"
        })

        .state('home.dashboard', {
            url: "/dashboard",
            templateUrl: "views/dashboard-alt.html",
            data: { bg: "",pageTitle: 'Home', specialClass: "fixed-nav colour2", otherBodyTags: 'data-gr-c-s-loaded="true"' },
            resolve: { authenticateSession : authenticateSession }
        })

        .state('myAccount', {
            abstract: true,
            url: "/my-account",
            templateUrl: "views/common/content.html"
        })

        .state('myAccount.fruit', {
            url: "/fruit",
            templateUrl: "views/fruit.html",
            data: { bg: "",pageTitle: 'Fruit', specialClass: "fixed-nav colour2", otherBodyTags: 'data-gr-c-s-loaded="true"' },
            resolve: { authenticateSession : authenticateSession }
        })
        

        .state('myAccount.meat', {
            url: "/meat",
            templateUrl: "views/meat.html",
            data: { bg: "",pageTitle: 'Meat', specialClass: "fixed-nav colour2", otherBodyTags: 'data-gr-c-s-loaded="true"' },
            resolve: { authenticateSession : authenticateSession }
        })

       

       
      
        
        $locationProvider.hashPrefix(''); // by default '!'
        $locationProvider.html5Mode(true);
        
}

function authenticateSession($http, $state, $location){
    if(localStorage.getItem('sessionId') != "" && localStorage.getItem('sessionId') != null ){        
        if($location.$$path == "/"){
            $location.url("/home/dashboard");
        }
        else{
            $location.url($location.$$path);
        }
        return false;
    }
    else{
        
        $location.url('login');
        return false;
    }
}  

angular
    .module('portalApp')
    .config(config)
    .run(function($rootScope, $state) {
        $rootScope.$state = $state;
    });
