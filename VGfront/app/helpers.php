if(!function_exists("api_route")){

function api_route($endpoint){

    return env("API_URL") . $endpoint;

}

}