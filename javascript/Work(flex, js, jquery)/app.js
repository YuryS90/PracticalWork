$(function() {  //Эта запись позволяет дождаться загрузки всего документа и после этого выполнять какие то действия с DOM-элементами нашего сайта /


    // Fixed header

    let header = $("#header"); // let - объявили переменную - header, в кот указали id header (см html. Или в html задать класс, вместо id и назвать класс .jsheader)
    let intro = $("#intro");
    let introH = intro.innerHeight(); // Высота блока intro (introH). При загрузке страницы должны получить высоту интроблока и позицию скрола
    let scrollPos = $(window).scrollTop(); /* Сравнивается высота элемента intro c размером скрола (сколько мы проскролили). Для этого задаём переменную 
    scrollPosition, обращаясь к окну (Window) и к методу scrollTop (т.е сколько проскролили от верха страницы) */
    // В итоге есть главные переменные introH и scrollPos (позиция скрола)
    // Теперь следим за скролом, мы хотим чтобы у нас при скроле сравнивалась позиция скрола с высотой. И если scrollPos больше чем introH мы выдаем класс fixed для шапки

    checkScroll(scrollPos, introH) // вместо load, будем вызывать данную ф-цию при загрузке страницы

    /* Чтобы следить за событием: скролл для окна (страницы). Пишем $(window) - мол мы работаем с окном, потом ставится .on() (в скобках пишется событие), т.е .on("scroll") 
    при скроле мы хотим что-то делать. В конструкции (, function() {}) пишем действия которые хотим выполнять при скроле страницы.
    Добавляем событие tload, чтобы при обновлении страницы шапка не исчезала, когда она ниже intro.
    Добавляем событие resize, чтобы не было бага, когда после мобильной версии, возращаясь к обычной версии шапка не появлялась в блоке intro */
    $(window).on("scroll resize", function() {
        introH = intro.innerHeight(); //intro.innerHeight() (innerHeight - высота элемента intro с padding-ом (Если без padding просто Height)) Узнаётся при событии. При resize будем перезаписывать значение переменной, убрав баг
        scrollPos = $(this).scrollTop(); /* будем обновлять значение переменной, потому что в переменной scrollPos хранится позиция страницы при загрузке и мы хотим 
        каждый раз обновлять эту позицию, потому скролл будет меняться при скроле страницы. Мы опять же будет обращаться к селектору window при помощи конструкции $(this)  
        т.е мы хотим обновить переменную scrollPos на текущую позицию скролла - scrollTop*/

        checkScroll(scrollPos, introH); // scrollPos, introH - эти параметры будут вызываться при скроле 
        // Сначала это было здесь, потом пошло в function checkScroll()

        //if( scrollPos > introH ) { // Если позиция скрола больше чем высота элемента ,
            //header.addClass("fixed"); //то 1 действие - выдаем класс fixed для элемента header
            // Расшифровка -  header.addClass("fixed") - хотим доб-ть headery класс - addClass, какой класс -> fixed
        //} else { // иначе 
            //header.removeClass("fixed"); // Иначе убираем (removeClass) класс fixed 
        //}
    });


    // Для стабильной работы события, а именно при перезагрузке страницы шапка не должна изчезать, делаем следующее
    /*Пишем функцию, которую будем вызывать. Функ-ция будет называться checkScroll() и будем её вызывать при определённых событиях
    Вносим проверку (if & else) в функцию и будем принимать параметры в эту ф-цию, а именно в строку 24 прописываем checkScroll(scrollPos, introH)
    Т.е. мы вызываем функцию checkScroll отправляем ей позицию скрола (scrollPos) и высоту интроблока (introH). Для того чтобы работать со строки 40, эти два параметра ещё раз вносятся в функцию (стр40)  */
    function checkScroll(scrollPos, introH) {
        if( scrollPos > introH ) { // Если позиция скрола больше чем высота элемента ,
            header.addClass("fixed"); //то 1 действие - выдаем класс fixed для элемента header
            // Расшифровка -  header.addClass("fixed") - хотим доб-ть headery класс - addClass, какой класс -> fixed
        } else { // иначе 
            header.removeClass("fixed"); // Иначе убираем (removeClass) класс fixed 
        }
    }


    // /Fixed header


    // Smooth scroll (Плавный скролл)
    /*При клике на какой либо пункт меню делать какое-то действие. Впервую очередь пишем событие при клике на эти пункты меню.
    Если нажмём по элементу, который имеeт data-scroll будет происходить действие */
    
    /*Нужно отменить стандартное поведение ссылки при клике, добавив event, и для атрибута event указываем preventDefault() - она отменяет стандартное поведение ссылки
    Итак, мы нажимаем на ссылку - $("[data-scroll]"), и благодаря тому, что прописано event.preventDefault() происходит данная отмена    */
    $("[data-scroll]").on("click", function(event) {
        event.preventDefault();

        /*Теперь нужно получить дата-атрибут (id) того элемента по которому мы кликнули. Для этого создаём переменную elementId, в которой хотим получить параметр $("[data-scroll]")
        именно того элемента по которому мы кликнули, с помощью конструкции this - получили доступ к элементу по которому мы кликнули и мы хотим получить его дата-атрибут - .data('scroll') - data-scroll (html) */ 
        let elementId = $(this).data('scroll');

        /*Дальше нужно получить позицию элемента от верха страницы. elementOffset - тоесть его отступ сверху, и берём переменную elementId (является строкой - кавычки не ставятся).
        ПОлучаем отступ от верха, прописав метод .offset, .top - от верха  */
        let elementOffset = $(elementId).offset().top;

        nav.removeClass("show");

        /*Дальше нужно плавно проскролить страницу до значения elementOffset. Плавный скролл будет засчёт конструкции .animate({})*/
        $("html, body").animate({ // ЧТо мы хотим анимировать? scrollTop (т.е скрол от верха). -80 - это отнимается от величины elementOffset для того чтобы скрол не залазил на блоки
            scrollTop: elementOffset - 80
        // Регулируем скорость скрола (прокрутки). Т.е сколько будет длиться анимация, указывается в мл/с

        }, 700);
    });
     // /Smooth scroll (Плавный скролл)



    // navToggle при помощи этого id будем отслеживать клик на данную кнопку

    /*Делаем селектор по id и следим за его кликом. Т.е .on("click") значит будем что то делать. Делаем отмену стандартого поведения элемента при клике*/
    /*Теперь нужно показывать или скрывать нашу менюшку. Можем выдавать класс для навигации*/
    /*При клике на navToggle мы хотим выдать класс для навигации либо его убрать. То есть первый раз наживаем - показываем меню, нажимаем второй - убираем её.
     Для это есть toggleClass, в котором укзываем параментр, который хотим выдавать show */
    /*Теперь нужно сделать, чтобы при клике на любой из пунктов меню, меню закрывалась. У нас есть клик на дата-скрол эелемент( $("[data-scroll]") )
     и мы хотим чтобы наша навигация скрылась, если она открыта. У нас есть переменные let nav = $("#nav"); let navToggle = $("#navToggle") Мы хотим при клике на скрол-элемент 
     убрать класс show. Берём навигацю (строка 72) и убираем класс (removeClass)  */
    let nav = $("#nav"); // переменные лучше объявлять вверху, вместе со всеми переменными (в 10-11 строки)
    let navToggle = $("#navToggle"); // переменные лучше объявлять вверху, вместе со всеми переменными (в 10-11 строки)

    navToggle.on("click", function(event) {
        event.preventDefault();

        nav.toggleClass("show");
    });




    // Делаем слайдер. ДЛя этого будем использовать готовую библиотеку slick js  https://kenwheeler.github.io/slick/

    // testimonialsSlider
    /* Мы должны для элемента slider вызвать метод slick (строка 112) */
    let slider = $("#testimonialsSlider");

    slider.slick({ // это всё просто копировалось из библиотеки slick js
        infinite: true, //  копировалось. Это означает, что бесконечно будет скролится 
        slidesToShow: 1, //  копировалось. Сколько мы хотим показать слайдов. БУдет 1 отзыв 
        slidesToScroll: 1, //  копировалось Сколько будем скролить слайдов при клике на скрол
        fade: true, // Чтобы затемнялись отзывы (то есть один исчезал, а другой появлялся на его месте)
        arrows: false, // Уберём кнопочки (previous и next)
        dots: true // точки (сколько элементов в слайдере) стилизуем в css
    });








});