/**
 * [draggable]
 * @param  {[String]} modal  [move element]
 * @param  {[String]} handle [handle element]
 */
var draggable = function(modal, handle) {

    var isDragging = false;
  
    var startX = 0,
      startY = 0,
  
      left = 0,
      top = 0;
  
    var dragStart = function(e) {
  
      var e = e || window.event;
  
      e.preventDefault();
  
      isDragging = true;
  
      startX = e.clientX;
      startY = e.clientY;
  
      left = $(modal).offset().left;
      top = $(modal).offset().top;
      
      $(document).on('mousemove', dragMove)
                 .on('mouseup', dragEnd);
    }
  
    var dragMove = function(e) {
  
      var e = e || window.event;
  
      e.preventDefault();
  
      if (isDragging) {
  
        var endX = e.clientX,
          endY = e.clientY,
          relativeX = endX - startX,
          relativeY = endY - startY;
  
        $(modal).css({
          left: relativeX + left + 'px',
          top: relativeY + top + 'px'
        });
  
      }
      return false;
    }
  
    var dragEnd = function(e) {
      $(document).off('mousemove')
                 .off('mouseup');
      
      isDragging = false;
    }
  
    $(handle).on('mousedown', dragStart);
    
  }
  
  draggable('.frosted-glass', '.frosted-glass');