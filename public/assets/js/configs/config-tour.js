/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2016 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(window, document, $) {
  'use strict';

  $.configs.set('tour', {
    steps: [{
      element: "#toggleMenubar",
      position: "right",
      intro: "Bienvenidos a AgenteDirecto <p class='content'>Aquí podemos poner información para explicar este paso</p>"
    }, {
      element: "#step1",
      intro: "Busca lo que necesitas <p class='content'>Aquí podemos poner información para explicar este paso</p>"
    }, {
      element: "#step2",
      position: 'left',
      intro: "Elige el rubro o categoría que necesites <p class='content'>Aquí podemos poner información para explicar este paso</p>"
    }, {
      element: "#step3",
      position: 'left',
      intro: "País o locación de tu preferencia <p class='content'>Aquí podemos poner información para explicar este paso</p>"
    }, {
      element: "#step4",
      position: 'left',
      intro: "A un solo click <p class='content'>Miles de oportunidades en un solo lugar</p>"
    }
    ],
    skipLabel: "<i class='md-close'></i>",
    doneLabel: "<i class='md-close'></i>",
    nextLabel: "Siguiente <i class='md-chevron-right'></i>",
    prevLabel: "<i class='md-chevron-left'></i>Atrás",
    showBullets: false
  });

})(window, document, $);
