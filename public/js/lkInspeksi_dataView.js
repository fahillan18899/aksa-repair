
// FUNGSI PRINT
function printTableMonitoring() {
  var printContent = document.getElementById("printContent").outerHTML;
  var originalContent = document.body.innerHTML;
  document.body.innerHTML = 
  `<html>
    <head>
      <title>Print Table</title>
      <style>
        table {
          width: 100%;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid black;
          padding: 8px;
          text-align: center;
        }
        th {
          background-color:rgb(241, 236, 236);
          }
      </style>
    </head>
    <body>
        ${printContent}
    </body>
  </html`;
  window.print();
  document.body.innerHTML = originalContent;
}
// FUNGSI PRINT END

// FUNGSI TTD DIGITAL
    // ttd 1
    (function() {
      window.requestAnimFrame = (function(callback) {
        return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimaitonFrame ||
          function(callback) {
            window.setTimeout(callback, 1000 / 60);
          };
      })();

      var canvas = document.getElementById("ttd_canvas1");
      var ctx = canvas.getContext("2d");
      ctx.strokeStyle = "#222222";
      ctx.lineWidth = 4;

      var drawing = false;
      var mousePos = {
        x: 0,
        y: 0
      };


      // --
      var lastPos = mousePos;

      canvas.addEventListener("mousedown", function(e) {
        drawing = true;
        lastPos = getMousePos(canvas, e);
      }, false);

      canvas.addEventListener("mouseup", function(e) {
        drawing = false;
      }, false);

      canvas.addEventListener("mousemove", function(e) {
        mousePos = getMousePos(canvas, e);
      }, false);
      // --

      // Add touch event support for mobile
      canvas.addEventListener("touchstart", function(e) {

      }, false);

      canvas.addEventListener("touchmove", function(e) {
        var touch = e.touches[0];
        var me = new MouseEvent("mousemove", {
          clientX: touch.clientX,
          clientY: touch.clientY
        });
        canvas.dispatchEvent(me);
      }, false);

      canvas.addEventListener("touchstart", function(e) {
        mousePos = getTouchPos(canvas, e);
        var touch = e.touches[0];
        var me = new MouseEvent("mousedown", {
          clientX: touch.clientX,
          clientY: touch.clientY
        });
        canvas.dispatchEvent(me);
      }, false);

      canvas.addEventListener("touchend", function(e) {
        var me = new MouseEvent("mouseup", {});
        canvas.dispatchEvent(me);
      }, false);

      function getMousePos(canvasDom, mouseEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
          x: mouseEvent.clientX - rect.left,
          y: mouseEvent.clientY - rect.top
        }
      }

      function getTouchPos(canvasDom, touchEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
          x: touchEvent.touches[0].clientX - rect.left,
          y: touchEvent.touches[0].clientY - rect.top
        }
      }

      function renderCanvas() {
        if (drawing) {
          ctx.moveTo(lastPos.x, lastPos.y);
          ctx.lineTo(mousePos.x, mousePos.y);
          ctx.stroke();
          lastPos = mousePos;
        }
      }
      // Add touch event support for mobile N

      // Prevent scrolling when touching the canvas
      document.body.addEventListener("touchstart", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);
      document.body.addEventListener("touchend", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);
      document.body.addEventListener("touchmove", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);

      (function drawLoop() {
        requestAnimFrame(drawLoop);
        renderCanvas();
      })();

      function clearCanvas() {
        canvas.width = canvas.width;
      }
      // Prevent scrolling when touching the canvas N

      // Set up the UI
      var sigText = document.getElementById("ttd_dataUrl1");
      var sigImage = document.getElementById("ttd_image1");
      var clearBtn = document.getElementById("ttd_clearBtn1");
      var submitBtn = document.getElementById("ttd_submitBtn1");
      clearBtn.addEventListener("click", function(e) {
        clearCanvas();
        sigText.innerHTML = "Data URL for your signature will go here!";
        sigImage.setAttribute("src", "");
      }, false);
      submitBtn.addEventListener("click", function(e) {
        var dataUrl = canvas.toDataURL();
        sigText.innerHTML = dataUrl;
        sigImage.setAttribute("src", dataUrl);
      }, false);

    })();
    // ttd S 1

    // ttd 2
    (function() {
      window.requestAnimFrame = (function(callback) {
        return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimaitonFrame ||
          function(callback) {
            window.setTimeout(callback, 1000 / 60);
          };
      })();

      var canvas = document.getElementById("ttd_canvas2");
      var ctx = canvas.getContext("2d");
      ctx.strokeStyle = "#222222";
      ctx.lineWidth = 4;

      var drawing = false;
      var mousePos = {
        x: 0,
        y: 0
      };


      // --
      var lastPos = mousePos;

      canvas.addEventListener("mousedown", function(e) {
        drawing = true;
        lastPos = getMousePos(canvas, e);
      }, false);

      canvas.addEventListener("mouseup", function(e) {
        drawing = false;
      }, false);

      canvas.addEventListener("mousemove", function(e) {
        mousePos = getMousePos(canvas, e);
      }, false);
      // --

      // Add touch event support for mobile
      canvas.addEventListener("touchstart", function(e) {

      }, false);

      canvas.addEventListener("touchmove", function(e) {
        var touch = e.touches[0];
        var me = new MouseEvent("mousemove", {
          clientX: touch.clientX,
          clientY: touch.clientY
        });
        canvas.dispatchEvent(me);
      }, false);

      canvas.addEventListener("touchstart", function(e) {
        mousePos = getTouchPos(canvas, e);
        var touch = e.touches[0];
        var me = new MouseEvent("mousedown", {
          clientX: touch.clientX,
          clientY: touch.clientY
        });
        canvas.dispatchEvent(me);
      }, false);

      canvas.addEventListener("touchend", function(e) {
        var me = new MouseEvent("mouseup", {});
        canvas.dispatchEvent(me);
      }, false);

      function getMousePos(canvasDom, mouseEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
          x: mouseEvent.clientX - rect.left,
          y: mouseEvent.clientY - rect.top
        }
      }

      function getTouchPos(canvasDom, touchEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
          x: touchEvent.touches[0].clientX - rect.left,
          y: touchEvent.touches[0].clientY - rect.top
        }
      }

      function renderCanvas() {
        if (drawing) {
          ctx.moveTo(lastPos.x, lastPos.y);
          ctx.lineTo(mousePos.x, mousePos.y);
          ctx.stroke();
          lastPos = mousePos;
        }
      }
      // Add touch event support for mobile N

      // Prevent scrolling when touching the canvas
      document.body.addEventListener("touchstart", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);
      document.body.addEventListener("touchend", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);
      document.body.addEventListener("touchmove", function(e) {
        if (e.target == canvas) {
          e.preventDefault();
        }
      }, false);

      (function drawLoop() {
        requestAnimFrame(drawLoop);
        renderCanvas();
      })();

      function clearCanvas() {
        canvas.width = canvas.width;
      }
      // Prevent scrolling when touching the canvas N

      // Set up the UI
      var sigText = document.getElementById("ttd_dataUrl2");
      var sigImage = document.getElementById("ttd_image2");
      var clearBtn = document.getElementById("ttd_clearBtn2");
      var submitBtn = document.getElementById("ttd_submitBtn2");
      clearBtn.addEventListener("click", function(e) {
        clearCanvas();
        sigText.innerHTML = "Data URL for your signature will go here!";
        sigImage.setAttribute("src", "");
      }, false);
      submitBtn.addEventListener("click", function(e) {
        var dataUrl = canvas.toDataURL();
        sigText.innerHTML = dataUrl;
        sigImage.setAttribute("src", dataUrl);
      }, false);

    })();
    // ttd S 2
// FUNGSI TTD DIGITAL END