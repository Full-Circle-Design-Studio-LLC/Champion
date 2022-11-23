<?php get_header() ?>
      </header>


<body>
  <div class="container-fluid p-0" id="page-store">


  <header class="col-12 p-0 float-left">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/banner/left.png" alt="left-image" class="left-image">
  <div class="logo-container">
  <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Champion Trophies & Awards Logo"></a>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/banner/right.png" alt="right-image" class="right-image">




  </header>


  <?php include('component-nav.php'); ?>



<div class="main-store-container col-12 float-left">
<main class="main-store col-12 float-left p-0">


<div class="store-container col-12 col-lg-10 offset-lg-1">
  <div id='collection-component-1590082051973'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'champion-trophies-awards.myshopify.com',
      storefrontAccessToken: '7cfedc19a022b2fa0b5eb40154f2bfbb',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '170247913610',
        node: document.getElementById('collection-component-1590082051973'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px",
          "width": "calc(25% - 20px)"
        },
        "text-align": "left",
        "img": {
          "height": "calc(100% - 15px)",
          "position": "absolute",
          "left": "0",
          "right": "0",
          "top": "0"
        },
        "imgWrapper": {
          "padding-top": "calc(75% + 15px)",
          "position": "relative",
          "height": "0"
        }
      },
      "title": {
        "font-family": "Raleway, sans-serif",
        "color": "#000000"
      },
      "button": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "16px",
        "padding-top": "16px",
        "padding-bottom": "16px",
        ":hover": {
          "background-color": "#ad1620"
        },
        "background-color": "#c01823",
        ":focus": {
          "background-color": "#ad1620"
        },
        "padding-left": "50px",
        "padding-right": "50px"
      },
      "quantityInput": {
        "font-size": "16px",
        "padding-top": "16px",
        "padding-bottom": "16px"
      },
      "price": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "16px",
        "color": "#333132"
      },
      "compareAt": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "13.6px",
        "color": "#333132"
      },
      "unitPrice": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "13.6px",
        "color": "#333132"
      }
    },
    "buttonDestination": "modal",
    "contents": {
      "options": false
    },
    "text": {
      "button": "View Product"
    },
    "googleFonts": [
      "Raleway"
    ]
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "16px",
        "padding-top": "16px",
        "padding-bottom": "16px",
        ":hover": {
          "background-color": "#ad1620"
        },
        "background-color": "#c01823",
        ":focus": {
          "background-color": "#ad1620"
        },
        "padding-left": "50px",
        "padding-right": "50px"
      },
      "quantityInput": {
        "font-size": "16px",
        "padding-top": "16px",
        "padding-bottom": "16px"
      },
      "title": {
        "font-family": "Raleway, sans-serif",
        "color": "#000000"
      },
      "price": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "color": "#333132"
      },
      "compareAt": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "color": "#333132"
      },
      "unitPrice": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "color": "#333132"
      },
      "description": {
        "font-family": "Raleway, sans-serif",
        "font-size": "16px",
        "color": "#000000"
      }
    },
    "googleFonts": [
      "Raleway"
    ],
    "text": {
      "button": "Add to cart"
    }
  },
  "cart": {
    "styles": {
      "button": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "font-size": "16px",
        "padding-top": "16px",
        "padding-bottom": "16px",
        ":hover": {
          "background-color": "#ad1620"
        },
        "background-color": "#c01823",
        ":focus": {
          "background-color": "#ad1620"
        }
      },
      "title": {
        "color": "#000000"
      },
      "header": {
        "color": "#000000"
      },
      "lineItems": {
        "color": "#000000"
      },
      "subtotalText": {
        "color": "#000000"
      },
      "subtotal": {
        "color": "#000000"
      },
      "notice": {
        "color": "#000000"
      },
      "currency": {
        "color": "#000000"
      },
      "close": {
        "color": "#000000",
        ":hover": {
          "color": "#000000"
        }
      },
      "empty": {
        "color": "#000000"
      },
      "noteDescription": {
        "color": "#000000"
      },
      "discountText": {
        "color": "#000000"
      },
      "discountIcon": {
        "fill": "#000000"
      },
      "discountAmount": {
        "color": "#000000"
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout",
      "noteDescription": "INCLUDE TEXT TO BE ENGRAVED"
    },
    "contents": {
      "note": true
    },
    "googleFonts": [
      "Raleway"
    ]
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "bold",
        "background-color": "#c01823",

        ":hover": {
          "background-color": "#ad1620"

        },
        ":focus": {
          "background-color": "#ad1620"
        }
      },
      "count": {
        "font-size": "16px"
      }
    },
    "googleFonts": [
      "Raleway"
    ]
  },
  "lineItem": {
    "styles": {
      "variantTitle": {
        "color": "#000000"
      },
      "title": {
        "color": "#000000"
      },
      "price": {
        "color": "#000000"
      },
      "fullPrice": {
        "color": "#000000"
      },
      "discount": {
        "color": "#000000"
      },
      "discountIcon": {
        "fill": "#000000"
      },
      "quantity": {
        "color": "#000000"
      },
      "quantityIncrement": {
        "color": "#000000",
        "border-color": "#000000"
      },
      "quantityDecrement": {
        "color": "#000000",
        "border-color": "#000000"
      },
      "quantityInput": {
        "color": "#000000",
        "border-color": "#000000"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>
</div>
  </main>
</div>


</div> <!-- CLOSES CONTAINER -->

</body>

<?php get_footer(); ?>