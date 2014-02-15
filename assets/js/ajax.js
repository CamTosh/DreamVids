
function likeRequest(videoId) {
    getRequest('/watch/like/' + videoId);
};

function dislikeRequest(videoId) {
    getRequest('/watch/dislike/' + videoId);
}

function unlikeRequest(videoId) {
   getRequest('/watch/unlike/' + videoId);
}

function undislikeRequest(videoId) {
   getRequest('/watch/undislike/' + videoId);
}

function getRequest(target) {
    var preProcessRequest = new XMLHttpRequest();
    preProcessRequest.open('GET', target);
    preProcessRequest.send(null);
}

function $(id) {
    return document.getElementById(id);
}