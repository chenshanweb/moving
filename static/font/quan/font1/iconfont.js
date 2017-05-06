;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-fill85" viewBox="0 0 1050 1024">' +
    '' +
    '<path d="M1030.283264 461.5424C1044.798464 446.2848 1050.148864 428.4672 1045.080064 412.672 1039.985664 396.8256 1025.188864 385.4336 1004.427264 381.44L756.056064 334.0288C733.528064 329.9328 703.832064 308.4544 692.491264 288.128L545.240064 22.528C541.835264 16.4352 535.384064 12.6464 528.446464 12.6464 521.432064 12.6464 515.032064 16.4096 511.652864 22.5024L364.094464 288.0512C352.702464 308.4544 322.955264 329.9328 300.299264 334.08L51.595264 381.44C31.140864 385.4336 16.446464 396.8 11.326464 412.5696 6.180864 428.3392 11.428864 446.1568 25.739264 461.5168L198.590464 644.6848C214.334464 661.3248 225.752064 696.2688 223.038464 719.3344L191.627264 967.8336C188.785664 989.6704 195.800064 1002.9312 202.225664 1010.2272 215.179264 1025.0496 237.502464 1028.096 259.800064 1017.6768L488.868864 911.1808C508.939264 901.7856 547.492864 901.7856 567.691264 911.1808L796.632064 1017.6768C805.592064 1021.8752 814.398464 1024 822.744064 1024 835.288064 1024 846.449664 1019.1104 854.232064 1010.2528 860.657664 1002.9568 867.697664 989.696 864.856064 967.936L833.444864 719.2576C830.449664 696.4224 841.892864 661.5552 857.944064 644.6336L1030.283264 461.5424 1030.283264 461.5424ZM830.040064 618.2656C806.129664 643.4304 790.897664 689.9968 795.326464 724.1472L826.763264 972.8256C827.736064 980.0448 826.328064 983.808 825.380864 984.9088 823.486464 987.008 817.931264 985.2672 812.888064 982.8864L583.896064 876.3904C568.689664 869.3248 548.926464 865.408 528.216064 865.408 507.531264 865.408 487.793664 869.3248 472.638464 876.3904L243.544064 982.8864C235.480064 986.7008 232.331264 986.3936 231.102464 984.9088 230.129664 983.8336 228.747264 980.0704 229.745664 972.7488L261.131264 723.9936C265.201664 689.5104 249.995264 643.0976 226.494464 618.3168L53.771264 435.2256C47.960064 429.0048 47.627264 425.1136 47.832064 424.4224 48.088064 423.7056 50.648064 420.7616 58.891264 419.1488L307.339264 371.84C341.028864 365.696 380.657664 337.1008 397.579264 306.7648L528.420864 71.3984 658.955264 306.816C675.851264 337.1008 715.480064 365.696 749.016064 371.7888L997.182464 419.1488C1005.630464 420.7616 1008.318464 423.7568 1008.497664 424.4224 1008.702464 425.0368 1008.292864 428.9536 1002.379264 435.2L830.040064 618.2656 830.040064 618.2656Z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-shoucang" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M753.237785 644.999107l58.514695 357.655749L505.869884 833.753051 199.794907 1002.654856l58.32743-357.655749L11.511683 392.501372l341.033164-51.962465L505.869884 14.326287 659.00254 340.537883l340.840782 51.962465L753.237785 644.999107zM620.620371 394.781298 505.869884 147.508565 389.785006 394.781298l-267.318278 34.672684 197.594287 201.675232L276.360723 890.658086l229.508137-128.624473 226.467895 129.574101-41.037648-259.527848L886.990045 432.493202 620.620371 394.781298z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-fanhuijiantou" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M969.59488 457.29792l-784.31232-0.26624L546.06848 93.0304c10.25024-10.3424 15.90272-24.07424 15.90272-38.67648 0-14.62272-5.64224-28.35456-15.90272-38.67648-20.46976-20.64384-56.20736-20.64384-76.66688 0L16.05632 473.05728c-21.1456 21.31968-21.1456 56.03328 0 77.35296l453.34528 457.37984c10.22976 10.32192 23.8592 16.0256 38.33856 16.0256 14.47936 0 28.09856-5.69344 38.33856-16.0256 21.1456-21.31968 21.1456-56.03328-0.37888-77.73184l-360.40704-363.6224 784.31232 0.26624c29.9008 0 54.2208-24.5248 54.2208-54.70208S999.49568 457.29792 969.59488 457.29792z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-fanhuijiantou1" viewBox="0 0 1118 1024">' +
    '' +
    '<path d="M229.419389 558.545455 1070.545455 558.545455C1096.251802 558.545455 1117.090909 537.706344 1117.090909 512 1117.090909 486.293656 1096.251802 465.454545 1070.545455 465.454545L229.419389 465.454545 544.912606 149.961328C563.089738 131.784198 563.089738 102.313246 544.912606 84.136115 526.735475 65.958984 497.264525 65.958984 479.087394 84.136115L84.136115 479.087394C75.04755 488.175959 70.503267 500.087979 70.503267 512 70.503267 523.912021 75.04755 535.824041 84.136115 544.912606L479.087394 939.863887C497.264525 958.041014 526.735475 958.041014 544.912606 939.863887 563.089738 921.686754 563.089738 892.215802 544.912606 874.038672L229.419389 558.545455Z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)