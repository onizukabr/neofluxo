glow.ready(function () {
//

// Assign a value of 'true' if browser supports storage
var hasStorage = window.localStorage ? true : false;

  function createContent() {
  // Check to see if panel content already exists
    if (hasStorage === true && localStorage.panel) {
  // If so, use locally stored data in panel
      createPanel(localStorage.panel);
  // If not, create the panel data
    } else {
  // GET the snippet markup
      var getMarkup = glow.net.get('contato_snippet.html', {
  // When the snippet loads, continue
        onLoad: function (response) {
  // Create a NodeList from the snippet
          var contactMarkup = response.text();
          glow.dom.create(contactMarkup);
  // Check again to see if browser has local storage
          if (hasStorage === true) {
  // If so, put the data into storage and then use it in the panel
            localStorage.panel = contactMarkup;
            createPanel(localStorage.panel);
          } else {
  // If not, use the data in the panel without storing it first
            createPanel(contactMarkup);
          }
        }
      });
    }
  }

  function createPanel(contactMarkup) {
  // Create the Panel element
    var contactPanel = glow.dom.create('<div id="contact_panel"></div>');
  // Set the height to zero so it doesn't display
    glow.dom.get(contactPanel).height(0);
  // Prepend the snippet markup to the panel
    glow.dom.get(contactPanel).prepend(contactMarkup);
  // Add the extra triggers - this is for purposes of the demo only
    var closePanel = glow.dom.create('<p class="trigger"></p>');
    var contactLink = glow.dom.create('<p><a href="http://www.casperlibero.edu.br/noticias/index.php/1969/12/31/neofluxo-disponibiliza-banco-de-dados-e-apis-sobre-redes-sociais-nas-eleicoes-presidenciais,n=4214.html" target="_blank"><strong>Sala de imprensa</strong></a></p>');
    contactPanel.get('.vcard').prepend(closePanel);
    contactPanel.get('.vcard').append(contactLink);
  // Prepend the panel to the body
    glow.dom.get('body').prepend(contactPanel);
  // Run the addEvents function
    addEvents();
  }
  
 
  function addEvents() {
  // Add an onclick event to both the trigger elements
    glow.events.addListener('.trigger', 'click', function () {
  // Toggle the animated slide
      glow.anim.slideToggle('#contact_panel', 0.5);
  // Prevent the link from activating
      return false;
    });
  }

  createContent();

//
});
