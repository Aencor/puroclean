 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,ScrollToPlugin,TextPlugin)
  // Footer animation
  var footerTL = gsap.timeline();
  var widgetLinks = '.widget-links li',
      footerLogo = '.footer-logo',
      socialIcons = '.social-icons a',
      footerCopyrights = '.copyrights';

  // GSAP Sets
  gsap.set(footerLogo, {
    x: -40, 
    autoAlpha:0
  });

  gsap.set(socialIcons, {
    x: 40, 
    autoAlpha:0
  });

  gsap.set(widgetLinks, {
    x:-40,
    autoAlpha: 0
  });
  
  gsap.set(footerCopyrights, {
    y: -40, 
    autoAlpha:0
  });

  var footerAnimation = 
    footerTL
    .to(footerLogo, {
      x: 0,
      autoAlpha: 1
    })
    .to(socialIcons, {
      x: 0,
      autoAlpha: 1,
      stagger: 0.1
    })
    .to(widgetLinks, {
      x: 0,
      autoAlpha: 1,
      stagger: 0.1
    })
    .to(footerCopyrights, {
      y: 0,
      autoAlpha: 1
    })

  // Footer animation
  ScrollTrigger.create ({
    trigger : '.global-footer',
    start: '-50px center',
    end : 'bottom',
    animation: footerAnimation
  });
 });