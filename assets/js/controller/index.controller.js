"use strict"

import Environment from "../environment.js";

const environment = new Environment;
class IndexController{
    testJqueryIntegration(){
        console.log('Hello World from JQuery and JavaScript');
    }
    async testApiCall(){
        const url = '';//add link here
        console.log(`Retrieving data from ${url}`);
        await environment.fetchRequest('GET',url,null).then(response => {
            console.log(response);
        });
    }
}

$(document).ready(function(){
    const indexController = new IndexController;
    $('#test-button').click(function (e){
        e.preventDefault();
        indexController.testApiCall();
    });
});

//TODO display data 