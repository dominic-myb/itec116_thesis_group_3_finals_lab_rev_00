"use strict"
export default class Environment{
    async fetchRequest(method, url, data){
        const options = {
            method: method,
            body: data
        }
        const response = await fetch(url, options);
        return response.json();
    }
}