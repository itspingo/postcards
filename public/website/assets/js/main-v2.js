var body = document.body;

var isMobile = function () {
    return window.getComputedStyle(navContainerMobile).display != 'none';
};

var isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);

// mobile menu
var navContainerMobile = document.querySelector('.nav-container-mobile');
var menuOverlay = document.querySelector('.menu-container .overlay');
var menuItems = document.querySelectorAll('.menu-container .menu-item');

var btnMenuMobile = document.querySelector('.btnMenu-mobile');
btnMenuMobile.onclick = function () {
    if (!body.classList.contains('is-open-main-menu')) {
        body.classList.add('is-open-main-menu');
    } else {
        body.classList.remove('is-open-main-menu');
    }
    return false;
}

menuOverlay.onclick = function () {
    body.classList.remove('is-open-main-menu');
}

for (i = 0; i <= menuItems.length - 1; i++) {
    (function (i) {
        menuItems[i].onclick = function () {
            body.classList.remove('is-open-main-menu');
        }
    })(i)
}

//expand category menu
var categories = document.querySelectorAll(".menu-container .category")
for (i = 0; i < categories.length; i++) {
    (function (i) {
        var category = categories[i];
        category.querySelector('.head').onclick = function () {
            if (!isMobile()) return;
            var allItems = document.querySelectorAll('.menu-container .category .item');
            toggleClass(allItems, 'fadeInDown', false);
            if (!category.classList.contains('is-open')) {
                toggleClass(categories, 'is-open', false);
                category.classList.add('is-open');
                var items = category.querySelectorAll('.item');
                for (j = 0; j < items.length; j++) {
                    items[j].style.animationDelay = (40 * j) + 'ms';
                    items[j].classList.add('fadeInDown');
                }
            } else {
                category.classList.remove('is-open');
            }
            return false;
        };
    })(i);
}

// desktop menu 
var btnMenu = document.querySelector('.btnMenu');
var menuWrapper = document.querySelector('.menu-wrapper');
var timerCloseMenu;
var timerOpenMenu;

function enterMouseToMenu(ev) {
    if (isMobile()) return;
    if (body.classList.contains('is-focus-search')) return;
    clearTimeout(timerCloseMenu);
    clearTimeout(timerOpenMenu);
    timerCloseMenu = 0;
    if (!body.classList.contains('is-open-main-menu')) {
        timerOpenMenu = setTimeout(function () {
            body.classList.add('is-open-main-menu');
        }, 200);
        body.addEventListener('mousemove', outMouseToMenu);
    }
}

function outMouseToMenu(ev) {
    if (isMobile()) return;
    if (findParent(ev.target, '.menu-wrapper') || findParent(ev.target, '.btnMenu')) return;
    clearTimeout(timerOpenMenu);
    if (timerCloseMenu != 0) return;
    timerCloseMenu = setTimeout(function () {
        body.classList.remove('is-open-main-menu');
        body.removeEventListener('mousemove', outMouseToMenu);
    }, 300);
}
//btnMenu.addEventListener('mouseenter', enterMouseToMenu);
//menuWrapper.addEventListener('mouseenter', enterMouseToMenu);

/*----------------------*/

//swiper
if (window.Swiper) {
    new Swiper('.swiper2', {
        spaceBetween: 10,
        slidesPerView: 'auto',
        freeMode: true,
        preloadImages: false,
        lazy: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var currentMonth = document.getElementById('currentMonth');
    new Swiper('.swiper-month', {
        initialSlide: currentMonth ? currentMonth.value : 0,
        slidesPerView: 'auto',
        freeMode: true
    });

    new Swiper('.swiper-envelope', {
        lazy: {
            preloaderClass: 'preloader',
            loadPrevNext: true,
            loadPrevNextAmount: Math.ceil(window.innerWidth / 260) + 1
        },
        preloadImages: false,
        slidesPerView: 'auto',
        freeMode: {
            enabled: true,
            sticky: true,
        },
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var envelopePreloaders = document.querySelectorAll('.swiper-envelope .preloader');
    for (let i = 0; i <= envelopePreloaders.length - 1; i++) {
        envelopePreloaders[i].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader"><path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path></svg>';
    }

}
/* -------------------- */

//Search desktop
var txtSearch = document.querySelector('.nav-container .txtSearch');
var btnSearch = document.querySelector('.nav-container .btnSearch');
var divSearchSuggest = document.querySelector('.nav-container .search-suggest');
var timerFocusOut;
txtSearch.addEventListener('focusin', function (ev) {
    clearTimeout(timerFocusOut);
    body.classList.add('is-focus-search');
});
txtSearch.addEventListener('focusout', function (ev) {
    clearTimeout(timerFocusOut);
    timerFocusOut = setTimeout(function () {
        body.classList.remove('is-focus-search');
    }, 100);
});
setupSearch(txtSearch, divSearchSuggest, btnSearch);


//Search mobile
var btnSearchMobile = document.querySelector('.btnSearch-mobile');
var btnBackSearchMobile = document.querySelector('.btnBackSearch-mobile');
var txtSearchMobile = document.querySelector('.nav-container-mobile .txtSearchMobile');
var divSearchSuggestMobile = document.querySelector('.nav-container-mobile .search-suggest');
setupSearch(txtSearchMobile, divSearchSuggestMobile);
btnSearchMobile.onclick = function () {
    body.classList.add('is-focus-search');
    txtSearchMobile.focus();
}
btnBackSearchMobile.onclick = function () {
    body.classList.remove('is-focus-search');
}


function setupSearch(input, divSuggest, btn) {
    var storeData = {};
    var timer;
    var firstClick = false;
    input.addEventListener('keyup', function (ev) {
        showData(input.value);
    });
    input.addEventListener('focusin', function (ev) {
        if (firstClick === false) firstClick = true;
        showData(input.value);
    });
    input.addEventListener("keyup", function (ev) {
        if (ev.keyCode === 13) {
            ev.preventDefault();
            redirect();
        }
    });
    if (btn) btn.onclick = redirect;

    function redirect() {
        if (input.value.trim() == "") return false;
        location.href = "/search/" + input.value.trim().replace(/ /g, '-');
    }

    function showData(searchKey) {
        if (firstClick === true) {
            divSuggest.innerHTML = '<div class="message">' + searchResource.pleaseWait + '</div>';
            firstClick = null;
        }
        getData(searchKey, function (data) {
            if (data.envelope.length == 0 && data.tag.length == 0) {
                divSuggest.innerHTML = '<div class="message">' + searchResource.postcardNotFound + '</div>';
            } else {
                divSuggest.innerHTML = '';
                for (var i = 0; i <= data.envelope.length - 1; i++) {
                    var card = data.envelope[i];
                    var elem = document.createElement('div');
                    elem.classList.add('envelope');
                    var pictureUrl = '/data/files/card_info/';
                    elem.innerHTML = '<a class="card" href="/card/' + card.url + '">' +
                        '<picture>' +
                        '<source srcset="' + pictureUrl + '2x/' + card.url + '.webp 1x,' + pictureUrl + '3x/' + card.url + '.webp 2x,' + pictureUrl + '4x/' + card.url + '.webp 3x" type="image/webp">' +
                        '<img width="240" height="240" src="' + pictureUrl + '2x/' + card.url + '.jpg" srcset="' + pictureUrl + '2x/' + card.url + '.jpg 1x,' + pictureUrl + '3x/' + card.url + '.jpg 2x,' + pictureUrl + '4x/' + card.url + '.jpg 3x" alt="' + card.title + '">' +
                        '</picture>' +
                        '<h3 class="no-wrap pr-10">' + card.title + '</h3>' +
                        '</a>';
                    divSuggest.appendChild(elem);
                }
                for (var i = 0; i <= data.tag.length - 1; i++) {
                    var item = data.tag[i];
                    var elem = document.createElement('div');
                    elem.classList.add('tag');
                    elem.innerHTML = '<a href="/tag/' + item.url + '" class="no-wrap text-regular"><svg class="icon-cat ml-10" viewBox="0 0 16 16"><path fill="currentColor" d="M11.742 10.344a6.5 6.5 0 10-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 001.415-1.414l-3.85-3.85a1.007 1.007 0 00-.115-.1zM12 6.5a5.5 5.5 0 11-11 0 5.5 5.5 0 0111 0z"/></svg><span>' + item.title + '</span></a>';
                    divSuggest.appendChild(elem);
                }
            }
        });
    }

    function getData(searchKey, callback) {
        searchKey = searchKey.trim().replace(/  /g, ' ');
        if (searchKey.length < 2) { searchKey = ''; }
        if (storeData["_" + searchKey]) { callback(storeData["_" + searchKey]); return false }
        clearTimeout(timer);
        timer = setTimeout(function () {
            post('/service/search_', { key: searchKey }, function (isSuccess, message, data) {
                if (isSuccess) callback(data);
                storeData["_" + searchKey] = data;
            });
        }, 500);
    }
}

/*----------------------*/

//card info copy link
var btnCopyLink = document.querySelector('.copylink-box a');
var txtCopyLink = document.querySelector('.copylink-box input');
if (btnCopyLink) {
    btnCopyLink.onclick = function () {
        txtCopyLink.select();
        txtCopyLink.setSelectionRange(0, 99999);
        document.execCommand("copy");
        btnCopyLink.classList.add('active');
        setTimeout(function () {
            btnCopyLink.classList.remove('active');
        }, 3000);
        return false;
    };
}

//card info edit link
var btnEditCard = document.querySelector('.btn-edit');
if (btnEditCard && lang == 'fa' && window.innerWidth <= 850 && !isIOS) {
    btnEditCard.setAttribute('href', '/#download');
}
/*----------------------*/

//market download button
if (isIOS) {
    var marketButtons = document.getElementsByClassName('market-button');
    for (let i = 0; i <= marketButtons.length - 1; i++) {
        if (!marketButtons[i].classList.contains('webapp')) {
            marketButtons[i].style.display = 'none';
        }
    }
}
/*----------------------*/

//more tags
var moreTags = document.querySelector('.more-tags a');
if (moreTags) {
    var tags = document.querySelector('.tags');
    tags.style.height = 'auto';
    var height = tags.offsetHeight;
    tags.style.height = '';
    if (height <= tags.offsetHeight) {
        moreTags.style.display = 'none';
        tags.style.height = 'auto';
    }
    moreTags.onclick = function () {
        tags.style.height = 'auto';
        var height = tags.offsetHeight;
        tags.style.height = '';
        tags.style.transition = 'height 0.6s ease-in-out';
        setTimeout(function () {
            tags.style.height = height + 'px';
            setTimeout(function () {
                moreTags.style.opacity = 0;
                setTimeout(function () { moreTags.style.visibility = 'hidden' });
            }, 600);
        }, 50);
        return false;
    }
}
/*----------------------*/

//rating
var rating = document.querySelector('.comment-wrapper .rating');
var ratingMessage = document.querySelector('.comment-wrapper .rating-message');
createRating(rating, function () {
    ratingMessage.innerHTML = '<span style="color: #b71c1c;font-weight:bold">' + commentResource.sendRateMessage + '</span>';
});

function createRating(container, callback) {
    if (!container) return false;
    var hfRate = container.querySelector('#hfRate');
    var cover = container.querySelector('.stars-fill-cover');
    var stars = container.querySelectorAll('.stars .icon');
    var starsFill = container.querySelectorAll('.stars-fill .icon');

    function changeStyle(value) {
        cover.style.width = value.toString().indexOf('%') != -1 ? value : value * (100 / stars.length) + '%';
    }

    changeStyle(hfRate.getAttribute('percent'));

    container.onmouseout = function () {
        changeStyle(hfRate.getAttribute('percent'));
    }

    for (let i = 0; i <= stars.length - 1; i++) {
        (function (i) {
            stars[i].onclick = function () {
                hfRate.value = i + 1;
                hfRate.setAttribute('percent', (i + 1) * (100 / stars.length) + '%');
                callback(i + 1);
            }
            starsFill[i].onclick = stars[i].onclick;

            stars[i].onmouseover = function () {
                changeStyle(i + 1);
            }
            starsFill[i].onmouseover = stars[i].onmouseover;
        })(i);
    }
}

var btnSendReview = document.getElementsByClassName('btn-send-review');
var btnMoreReview = document.getElementById('moreComment');
if (btnSendReview.length > 0) {
    var isLoading = false;
    btnSendReview[0].addEventListener('click', function (ev) {
        ev.preventDefault();
        if (isLoading) return false;
        var divMessage = document.getElementById('divMessage');
        divMessage.style.textAlign = 'center';
        var e = {
            from: 0,
            name: document.getElementById('txtName').value,
            comment: document.getElementById('txtComment').value,
            rate: document.getElementById('hfRate').value,
            linkType: document.getElementById('txtLinkType').value,
            linkId: document.getElementById('txtLinkId').value,
        };
        if (e.rate == 0) e.rate = 5;
        if (e.name.trim() == '') {
            divMessage.innerHTML = commentResource.enterYourName;
            divMessage.style.color = '#b71c1c';
            document.getElementById('txtName').focus();
            return false;
        }
        if (e.comment.trim() == '') {
            divMessage.innerHTML = commentResource.enterYourReview;
            divMessage.style.color = '#b71c1c';
            document.getElementById('txtComment').focus();
            return false;
        }
        divMessage.style.color = '#000';
        divMessage.innerHTML = commentResource.pleaseWait;
        isLoading = true;
        post('/api/sendComment', e, function (isSuccess, message, data) {
            isLoading = false;
            divMessage.innerHTML = commentResource.approvalMessage;
            divMessage.style.color = '#4CAF50';
            document.getElementById('txtName').style.display = 'none';
            document.getElementById('txtComment').style.display = 'none';
            btnSendReview[0].style.display = 'none';
        });
    });

    if (btnMoreReview) {
        btnMoreReview.onclick = function (ev) {
            ev.preventDefault();
            var commentsWrapper = document.getElementsByClassName('comments')[0];
            var commentElems = document.querySelectorAll('.comments .comment');
            var commentLoading = document.getElementsByClassName('comment-loading')[0];

            var pageNum = Math.ceil(commentElems.length / parseInt(document.getElementById('txtPageSize').value)) + 1;
            var linkType = document.getElementById('txtLinkType').value;
            var linkId = document.getElementById('txtLinkId').value;

            commentLoading.innerHTML = commentResource.pleaseWait;
            commentLoading.style.textAlign = 'center';
            btnMoreReview.style.display = 'none';

            post('/api/getComments?linkType=' + linkType + '&linkId=' + linkId + '&pageNum=' + pageNum, {}, function (isSuccess, message, data) {
                for (var i = 0; i <= data.items.length - 1; i++) {
                    var comment = data.items[i];
                    var sampleElem = document.getElementsByClassName('comment-sample')[0].cloneNode(true);
                    sampleElem.classList.remove('comment-sample');
                    sampleElem.getElementsByClassName('profile')[0].classList.add('color-' + (((i + commentElems.length) % 9) + 1));
                    sampleElem.getElementsByClassName('date')[0].innerHTML = comment.createDate;
                    sampleElem.getElementsByClassName('rateNum')[0].innerHTML = numberLocalize(comment.rate, lang);
                    sampleElem.getElementsByClassName('title')[0].innerHTML = comment.name;
                    sampleElem.getElementsByClassName('content')[0].innerHTML = comment.comment;
                    if (comment.picture == '') {
                        sampleElem.getElementsByClassName('imgProfile')[0].remove();
                    } else {
                        sampleElem.getElementsByClassName('imgProfile')[0].setAttribute('src', comment.picture);
                        sampleElem.getElementsByClassName('profile')[0].remove();
                    }
                    commentsWrapper.appendChild(sampleElem);
                }

                commentLoading.innerHTML = '';
                if (document.querySelectorAll('.comments .comment').length < data.count) {
                    btnMoreReview.style.display = 'block';
                }
            });

            return false;
        }
    }
}


/*-FAQ---------------------*/
var faqs = document.querySelectorAll('.faq-container .faq');
for (let index = 0; index <= faqs.length - 1; index++) {
    (function (index) {
        var faq = faqs[index];
        var quest = faq.getElementsByClassName('question')[0];
        quest.onclick = function () {
            if (faq.classList.contains('open')) {
                faq.classList.remove('open');
            } else {
                for (let j = 0; j <= faqs.length - 1; j++) {
                    faqs[j].classList.remove('open');
                }
                faq.classList.add('open');
            }
        }
    })(index);
}
/*----------------------*/

// Smooth scroll download button
var btnDownload = document.getElementsByClassName('download-app');
var wrapperDownload = document.querySelector('#download');
if (btnDownload.length > 0 && wrapperDownload) {
    btnDownload[0].addEventListener('click', function (e) {
        e.preventDefault();
        wrapperDownload.scrollIntoView({
            behavior: 'smooth'
        });
    });
}
/*----------------------*/

//Article sms copy button
var articleSms = document.getElementsByClassName('nblock-quote');
var articleIcon = {
    copy: '<svg viewBox="0 0 24 24" class="ml-5"><path fill="currentColor" d="M19,21H8V7H19M19,5H8A2,2 0 0,0 6,7V21A2,2 0 0,0 8,23H19A2,2 0 0,0 21,21V7A2,2 0 0,0 19,5M16,1H4A2,2 0 0,0 2,3V17H4V3H16V1Z"></path></svg>',
    check: '<svg viewBox="0 0 24 24" class="ml-5"><path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg>',
    shareVariant: '<svg viewBox="0 0 24 24" class="ml-5"><path fill="currentColor" d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z"></path></svg>'
}
for (let i = 0; i <= articleSms.length - 1; i++) {
    (function (i) {
        const element = document.createElement('div');
        element.classList.add('action-button');
        articleSms[i].appendChild(element);
        var btnCopy = document.createElement('button');
        btnCopy.innerHTML = '<div class="on">' + articleIcon.copy + "<span>" + articleResource.copyText + "</span></div>";
        btnCopy.innerHTML += '<div class="off">' + articleIcon.check + "<span>" + articleResource.textCopied + "</span></div>";
        element.appendChild(btnCopy);
        var btnShare = document.createElement('button');
        btnShare.innerHTML = articleIcon.shareVariant + "<span>" + articleResource.share + "</span>";
        element.appendChild(btnShare);

        btnCopy.onclick = function () {
            var elem = articleSms[i].getElementsByTagName('blockquote');
            copyTextToClipboard(elem[0].innerHTML.replace(/<br>/g, '\n'));
            btnCopy.classList.add('active');
            setTimeout(function () {
                btnCopy.classList.remove('active');
            }, 3000);
            return false;
        };

        btnShare.onclick = function () {
            var elem = articleSms[i].getElementsByTagName('blockquote');
            var data = {
                title: articleResource.siteName,
                text: elem[0].innerHTML.replace(/<br>/g, '\n')
            };
            navigator.share(data);
        };

    })(i);
}

function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        document.execCommand('copy');
    } catch (err) { }

    document.body.removeChild(textArea);
}
function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return;
    }
    navigator.clipboard.writeText(text).then(function () { }, function () { });
}
/*----------------------*/

window.onscroll = function () {
    if (window.pageYOffset > 40) {
        body.classList.add("has-scroll");
    } else {
        body.classList.remove("has-scroll");
    }
}

function findParent(el, selector) {
    var result = null;
    while (el) {
        if (el.matches(selector)) {
            result = el;
            break
        }
        el = el.parentElement;
    }
    return result;
}

function toggleClass(elems, className, enable) {
    for (j = 0; j < elems.length; j++) {
        if (enable !== false) { elems[j].classList.add(className); } else { elems[j].classList.remove(className); }
    }
}

function numberLocalize(text, lang) {
    if (lang == 'fa') {
        var str = text.toString();
        var persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        for (var i = 0; i <= 9; i++) str = str.replace(new RegExp(i, "g"), persian[i]);
        return str;
    }
    return text;
}

function post(url, data, callback) {
    var formData = new FormData();
    for (var key in data) {
        var value = data[key];
        formData.append(key, value);
    }
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = JSON.parse(request.responseText);
            if (callback) callback(response.status == 1, response.message, response.data);
        }
    }

    request.addEventListener('error', function () {
        if (callback) callback(false, '', '');
    });

    request.open('POST', url);
    request.send(formData);
}