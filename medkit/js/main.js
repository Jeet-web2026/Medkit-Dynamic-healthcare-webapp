$(document).ready(function(){
    $('#navbarSupportedContentlast li').addClass('nav-item me-4');
    $('#navbarSupportedContentlast li a').addClass('text-black link-underline-light fw-bold');
    $('#posts').find('.text-truncate').removeClass();
    $('#posts').find('#respond').addClass('shadow p-4 rounded');
    $('#posts').find('.logged-in-as').addClass('text-black mb-2');
    $('#posts').find('#comment').addClass('w-100 border border-secondary rounded my-2 text-black ps-2 py-2');
    $('#posts').find('#author').addClass('w-100 border border-secondary rounded my-2 text-black ps-2 py-2');
    $('#posts').find('#email').addClass('w-100 border border-secondary rounded my-2 text-black ps-2 py-2');
    $('#posts').find('#url').addClass('w-100 border border-secondary rounded my-2 text-black ps-2 py-2');
    $('#posts').find('.submit').addClass('shadow');
    $('#pages').find('.wp-pagenavi').addClass('d-flex justify-content-end align-items-end');
    $('#pages').find('.pages').addClass('rounded text-secondary fw-bold');
    $('#pages').find('.current').addClass('rounded border border-secondary text-secondary fw-bold');
    $('#pages').find('.page').addClass('rounded border border-secondary text-secondary fw-bold');
    $('#pages').find('.nextpostslink').addClass('rounded border border-secondary text-secondary fw-bold');
    $('#pages').find('.previouspostslink').addClass('rounded border border-secondary text-secondary fw-bold');
    $('#posts').find('#comments').text('');
    $('#posts').find('.commentlist').addClass('card border-0 rounded mb-0');
    $('#posts').find('.fn .url').addClass('fw-bold fs-5 text-black fst-normal');
    $('#posts').find('.comment-author-my-wordpress p').addClass('text-capitalize my-2');
    $('#posts').find('.comment-author-my-wordpress').addClass('my-2 border-0 shadow p-3 rounded');
    $('#posts').find('.comment-author-my-wordpress .comment-reply-link').addClass('btn btn-outline-dark px-3 py-1');
})