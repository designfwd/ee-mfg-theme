/**
 * Pushbar.js
 *
 * There is no NPM package right now, so this is straight from the source
 *
 * @link https://github.com/oncebot/pushbar.js
 */
class Pushbar {
    constructor(config = { overlay: true, blur: false }) {
      this.activeBar = null;
      this.overlay = false;
  
      if (config.overlay) {
        this.overlay = document.createElement('div');
        this.overlay.classList.add('pushbar_overlay');
        document.querySelector('body').appendChild(this.overlay);
      }
  
      if (config.blur) {
        const mainContent = document.querySelector('.pushbar_main_content');
        if (mainContent) {
          mainContent.classList.add('pushbar_blur');
        }
      }
  
      this.bindEvents();
    }
  
    get opened() {
      const { activeBar } = this;
      return Boolean(activeBar instanceof HTMLElement && activeBar.classList.contains('opened'));
    }
    
    get activeBarId() {
      const { activeBar } = this;
      return activeBar instanceof HTMLElement && activeBar.getAttribute('data-pushbar-id');
    }
  
    static dispatchOpen(pushbar) {
      const event = new CustomEvent('pushbar_opening', { bubbles: true, detail: { pushbar } });
      pushbar.dispatchEvent(event);
    }
  
    static dispatchClose(pushbar) {
      const event = new CustomEvent('pushbar_closing', { bubbles: true, detail: { pushbar } });
      pushbar.dispatchEvent(event);
    }
  
    static findElementById(pushbarId) {
      return document.querySelector(`[data-pushbar-id="${pushbarId}"]`);
    }
  
    handleOpenEvent(e) {
      e.preventDefault();
      const pushbarId = e.currentTarget.getAttribute('data-pushbar-target');
      if (pushbarId) {
        this.open(pushbarId);
      }
    }
  
    handleCloseEvent(e) {
      e.preventDefault();
      this.close();
    }
  
    handleKeyEvent(e) {
      if (this.opened && e.keyCode === 27) {
        this.close();
      }
    }
  
    bindEvents() {
      const triggers = document.querySelectorAll('[data-pushbar-target]');
      const closers = document.querySelectorAll('[data-pushbar-close]');
  
      triggers.forEach(trigger => trigger.addEventListener('click', e => this.handleOpenEvent(e), false));
      closers.forEach(closer => closer.addEventListener('click', e => this.handleCloseEvent(e), false));
  
      if (this.overlay) {
        this.overlay.addEventListener('click', e => this.handleCloseEvent(e), false);
      }
      document.addEventListener('keyup', e => this.handleKeyEvent(e));
    }
  
    open(pushbarId) {
      // Current bar is already opened
      if (String(pushbarId) === this.activeBarId && this.opened) {
        return;
      }
      
      // Get new pushbar target
      const pushbar = Pushbar.findElementById(pushbarId);
  
      if (!pushbar) return;
      
      // Close active bar (if exists)
      if (this.opened) {
        this.close();
      }
      
      Pushbar.dispatchOpen(pushbar);
      pushbar.classList.add('opened');
  
      const Root = document.querySelector('html');
      Root.classList.add('pushbar_locked');
      Root.setAttribute('pushbar', pushbarId);
      this.activeBar = pushbar;
    }
  
    close() {
      const { activeBar } = this;
      if (!activeBar) return;
      
      Pushbar.dispatchClose(activeBar);
      activeBar.classList.remove('opened');
  
      const Root = document.querySelector('html');
      Root.classList.remove('pushbar_locked');
      Root.removeAttribute('pushbar');
      
      this.activeBar = null;
    }
  }
  
  
// Declares an initial Pushbar instance
const drawer = new Pushbar({
  // blur: false,
  overlay: true
});
drawer.close();

// Drawer scripting
// Manages preloading
jQuery('.m-drawerMenu__sub').addClass('js-loaded').hide();

// Toggles submenus if you click the toggle
jQuery('.m-drawerMenu__toggle').click(function() {
  jQuery(this).toggleClass('js-clicked');
  jQuery(this).siblings('.m-drawerMenu__link--inactive').toggleClass('js-clicked');
  // close other menus
  jQuery('.current_page_item').toggleClass('current_page_item');
  jQuery('.js-clicked').toggleClass('js-clicked');
  jQuery('.js-open').toggleClass('js-open').slideToggle();



  // open menu
  jQuery(this).parent().toggleClass('current_page_item');
  jQuery(this).siblings('.m-drawerMenu__subLink').toggleClass('js-clicked');
  jQuery(this).siblings('.m-drawerMenu__sub').toggleClass('js-open').slideToggle();
});

/* If clicking outside of menu, close it
const menu = jQuery('.o-navigation');
jQuery(document).mouseup(function(e) {
  if(
    !menu.is(e.target) &&
    menu.has(e.target).length === 0
  ) {
    drawer.close();
  }
});*/