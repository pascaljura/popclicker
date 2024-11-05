/**
 * Template Name: iPortfolio
 * Updated: Mar 10 2023 with Bootstrap v5.2.3
 * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos,
      behavior: "smooth",
    });
  };

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("body").classList.toggle("mobile-nav-active");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let body = select("body");
        if (body.classList.contains("mobile-nav-active")) {
          body.classList.remove("mobile-nav-active");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Hero type effect
   */
  const typed = select(".typed");
  if (typed) {
    let typed_strings = typed.getAttribute("data-typed-items");
    typed_strings = typed_strings.split(",");
    new Typed(".typed", {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000,
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select(".skills-content");
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: "80%",
      handler: function (direction) {
        let progress = select(".progress .progress-bar", true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute("aria-valuenow") + "%";
        });
      },
    });
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener("load", () => {
    let portfolioContainer = select(".portfolio-container");
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: ".portfolio-item",
      });

      let portfolioFilters = select("#portfolio-flters li", true);

      on(
        "click",
        "#portfolio-flters li",
        function (e) {
          e.preventDefault();
          portfolioFilters.forEach(function (el) {
            el.classList.remove("filter-active");
          });
          this.classList.add("filter-active");

          portfolioIsotope.arrange({
            filter: this.getAttribute("data-filter"),
          });
          portfolioIsotope.on("arrangeComplete", function () {
            AOS.refresh();
          });
        },
        true
      );
    }
  });

  /**
   * Initiate portfolio lightbox
   */
  const portfolioLightbox = GLightbox({
    selector: ".portfolio-lightbox",
  });

  /**
   * Portfolio details slider
   */
  new Swiper(".portfolio-details-slider", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  /**
   * Testimonials slider
   */
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();
})();
// Funkce pro rozbalení a skrytí roletky
function toggleAchievement() {
  var achievementContent = document.querySelector(".achievement-content");
  if (achievementContent.style.display === "none") {
    achievementContent.style.display = "block";
  } else {
    achievementContent.style.display = "none";
  }
}
function toggleAchievement1() {
  var achievementContent1 = document.querySelector(".achievement-content1");
  if (achievementContent1.style.display === "none") {
    achievementContent1.style.display = "block";
  } else {
    achievementContent1.style.display = "none";
  }
}

var image = document.getElementById("game-image");
var score = document.getElementById("score");
var titleText = document.getElementById("game-title-text");
var selectedButton = 1;
var currentScore = 0;


// Funkce pro obsluhu kliknutí na obrázek
function handleClick() {
  currentScore++;
  updateScoreDisplay();

  // Změna obrázku na základě vybraného tlačítka
  if (selectedButton === 2) {
    image.src = "photo/niki2.png";
  } else if (selectedButton === 3) {
    image.src = "photo/michal2.png";
  } else if (selectedButton === 4) {
    image.src = "photo/mira2.png";
  } else if (selectedButton === 5) {
    image.src = "photo/matej2.png";
  } else {
    image.src = "photo/george2.png";
  }

  // Změna obrázku zpět po krátké prodlevě
  setTimeout(function () {
    if (selectedButton === 2) {
      image.src = "photo/niki1.png";
    } else if (selectedButton === 3) {
      image.src = "photo/michal1.png";
    } else if (selectedButton === 4) {
      image.src = "photo/mira1.png";
    } else if (selectedButton === 5) {
      image.src = "photo/matej1.png";
    } else {
      image.src = "photo/george1.png";
    }
  }, 1);

  // Přehrávání zvuků na základě skóre
  var randomSoundIndex = Math.floor(Math.random() * 6) + 1;
  if (currentScore % 100 === 0) {
    var sound100 = new Audio("./sounds/100b.mp3");
    sound100.play();
  } else {
    var audio = new Audio("./sounds/" + randomSoundIndex + ".mp3");
    audio.play();
  }

  // Kontrola splněných Achievementů na základě skóre
  checkScoreAchievements(currentScore);
}

// Funkce pro kontrolu dosažených Achievementů na základě skóre
function checkScoreAchievements(currentScore) {
  var achievements = {
    1: "Šikula, dosáhl jsi své první skóre. GG",
    10: "Achievement odemčen: 10. Skóre!<br>Jen tak dál draku. 🐉",
    69: "Achievement odemčen: NAJZ! 😎",
    100: "Achievement odemčen: 100. Skóre!<br>Už jen trochu.",
    1000: "Achievement odemčen: 1000. Skóre!<br>Šikula. Jen pokračuj.",
    1707: "Achievement odemčen: LOLI time! 😏",
    6969: "Achievement odemčen: OMEGALUL!",
    80085: "Achievement odemčen: BOOBS! 🍒",
    696969: "Achievement odemčen: BRO přestaň!! 😐",
    1000000: "Achievement odemčen: NOLIFER! 💰",
  };

  if (achievements[currentScore]) {
    showAchievementPopup(achievements[currentScore], currentScore);
  }
}

// Funkce pro zobrazení popup okna s Achievementem
function showAchievementPopup(achievement, achievementId) {
  var popup = document.getElementById("achievement-popup");
  popup.innerHTML = achievement;
  popup.style.display = "block";
  popup.style.border = "1px solid white";

  var achievementElements = document.querySelectorAll(".achievement");
  achievementElements.forEach(function (element) {
    element.style.color = "#0082ff";
  });

  var achievementElement = document.getElementById(achievementId);
  if (achievementElement) {
    achievementElement.style.color = "#0082ff";
  }

  setTimeout(function () {
    popup.style.display = "none";
  }, 3000);

  // Ukládání Achievementů do localStorage
  var savedAchievements = localStorage.getItem("clicker_achievements");
  var parsedAchievements = savedAchievements
    ? JSON.parse(savedAchievements)
    : {};
  parsedAchievements[achievementId] = true;
  localStorage.setItem(
    "clicker_achievements",
    JSON.stringify(parsedAchievements)
  );
}

// Funkce pro změnu obrázku na základě vybraného tlačítka
function changeImage(buttonIndex) {
  if (buttonIndex !== selectedButton) {
    selectedButton = buttonIndex;
    if (buttonIndex === 1) {
      image.src = "photo/george1.png";
    } else if (buttonIndex === 2) {
      image.src = "photo/niki1.png";
    } else if (buttonIndex === 3) {
      image.src = "photo/michal1.png";
    } else if (buttonIndex === 4) {
      image.src = "photo/mira1.png";
    } else if (buttonIndex === 5) {
      image.src = "photo/matej1.png";
    }
    updateScoreDisplay();
    checkScoreThreshold(currentScore);
  }
}

// Funkce pro aktualizaci zobrazení skóre
function updateScoreDisplay() {
  score.innerHTML = currentScore;
}

// Blokování kontextového menu, drag and drop
document.addEventListener("contextmenu", function (e) {
  e.preventDefault();
});

document.addEventListener("dragstart", function (e) {
  e.preventDefault();
});

document.addEventListener("dragover", function (e) {
  e.preventDefault();
});

window.addEventListener("load", function () {
  // Načtení uložených dat ze localStorage při načtení stránky
  var savedData = localStorage.getItem("clicker_data");
  if (savedData) {
    var parsedData = JSON.parse(savedData);
    selectedButton = parsedData.selectedButton;
    currentScore = parsedData.currentScore;
    changeImage(selectedButton);
    updateScoreDisplay();
  } else {
    changeImage(1);
  }

  // Načtení uložených Achievementů z localStorage a zvýraznění
  var savedAchievements = localStorage.getItem("clicker_achievements");
  if (savedAchievements) {
    var parsedAchievements = JSON.parse(savedAchievements);
    for (var achievementId in parsedAchievements) {
      var achievementElement = document.getElementById(achievementId);
      if (achievementElement) {
        achievementElement.style.color = "#0082FF";
      }
    }
  }

  // Přidání posluchačů událostí na obrázek
  image.addEventListener("click", handleClick);
  image.addEventListener("mousedown", handleMouseDown);
  image.addEventListener("mouseup", handleMouseUp);
  image.addEventListener("touchstart", handleMouseDown);
  image.addEventListener("touchend", handleMouseUp);
});

// Funkce pro resetování skóre
function resetScores() {
  var confirmation = confirm("Vážně chcete vymazat skóre?");
  if (confirmation) {
    currentScore = 0;
    updateScoreDisplay();
    alert("Skóre bylo úspěšně smazáno.");

    // Vymazání Achievementů z localStorage
    localStorage.removeItem("clicker_achievements");

    // Reset barvy Achievementu s ID 1 na #FFF
    var achievement1 = document.getElementById("1");
    if (achievement1) {
      achievement1.style.color = "#FFF";
    }

    // Reset barvy Achievementu s ID 10 na #FFF
    var achievement10 = document.getElementById("10");
    if (achievement10) {
      achievement10.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 69 na #FFF
    var achievement69 = document.getElementById("69");
    if (achievement69) {
      achievement69.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 100 na #FFF
    var achievement100 = document.getElementById("100");
    if (achievement100) {
      achievement100.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 1000 na #FFF
    var achievement1000 = document.getElementById("1000");
    if (achievement1000) {
      achievement1000.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 1707 na #FFF
    var achievement1707 = document.getElementById("1707");
    if (achievement1707) {
      achievement1707.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 6969 na #FFF
    var achievement6969 = document.getElementById("6969");
    if (achievement6969) {
      achievement6969.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 80085 na #FFF
    var achievement80085 = document.getElementById("80085");
    if (achievement80085) {
      achievement80085.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 696969 na #FFF
    var achievement696969 = document.getElementById("696969");
    if (achievement696969) {
      achievement696969.style.color = "#FFF";
    }
    // Reset barvy Achievementu s ID 1000000 na #FFF
    var achievement1000000 = document.getElementById("1000000");
    if (achievement1000000) {
      achievement1000000.style.color = "#FFF";
    }
  }
}

var footerButton = document.getElementById("footer-button");
footerButton.addEventListener("click", resetScores);

// Přidání posluchačů událostí klávesnice
window.addEventListener("keydown", function (event) {
  if (event.repeat) {
    return;
  }
  handleClick();
});

window.addEventListener("keyup", function (event) {
  // Reset obrázku po uvolnění klávesy
  if (selectedButton === 2) {
    image.src = "photo/niki1.png";
  } else if (selectedButton === 3) {
    image.src = "photo/michal1.png";
  } else if (selectedButton === 4) {
    image.src = "photo/mira1.png";
  } else if (selectedButton === 5) {
    image.src = "photo/matej1.png";
  } else {
    image.src = "photo/george1.png";
  }
});

window.addEventListener("beforeunload", function () {
  // Ukládání dat při opuštění stránky
  var data = {
    selectedButton: selectedButton,
    currentScore: currentScore,
  };
  var serializedData = JSON.stringify(data);
  localStorage.setItem("clicker_data", serializedData);
});

var holdTimeout;

function handleMouseDown() {
  // Změna obrázku při stisknutí tlačítka myši
  if (selectedButton === 2) {
    image.src = "photo/niki2.png";
  } else if (selectedButton === 3) {
    image.src = "photo/michal2.png";
  } else if (selectedButton === 4) {
    image.src = "photo/mira2.png";
  } else if (selectedButton === 5) {
    image.src = "photo/matej2.png";
  } else {
    image.src = "photo/george2.png";
  }

  // Zpožděné volání handleClick po dlouhém stisknutí
  holdTimeout = setTimeout(function () {
    handleClick();
  }, 500);
}

function handleMouseUp() {
  clearTimeout(holdTimeout);
  // Reset obrázku po uvolnění tlačítka myši
  if (selectedButton === 2) {
    image.src = "photo/niki1.png";
  } else if (selectedButton === 3) {
    image.src = "photo/michal1.png";
  } else if (selectedButton === 4) {
    image.src = "photo/mira1.png";
  } else if (selectedButton === 5) {
    image.src = "photo/matej1.png";
  } else {
    image.src = "photo/george1.png";
  }
}

window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());

gtag("config", "G-SPW50ZLEL1");
