var comment_rating = {
    order_id: document.getElementById('orderId').textContent,
    user_id: document.getElementById('userId').textContent,
    commentRating: []
}

document.querySelectorAll('.itemWrapper').forEach(el => {
    const el_id = el.getAttribute('id');
    const productId = el_id.slice(4, el_id.indexOf("__"));
    var currentCommentRating = {
        productId: productId,
        ratingPoint: document.getElementById('id--' + productId + '__ratingPoint').textContent,
        comment: document.getElementById('id--' + productId + '__comment').textContent
    }
    comment_rating.commentRating.push(currentCommentRating);
})

document.querySelectorAll('.rating span').forEach(el => {
    const el_id = el.getAttribute('id');
    const productId = el_id.slice(4, el_id.indexOf("__"));

    el.addEventListener('click', (ev) => {
        var currentCommentRating = {
            productId: productId,
            ratingPoint: ev.target.getAttribute('name'),
            comment: ''
        }

        if (existCommentRating(productId)) {
            setRating(productId, currentCommentRating.ratingPoint);
        } else {
            comment_rating.commentRating.push(currentCommentRating);
        }
        console.log(comment_rating);
        ResetPaint(productId);
        PaintStar(productId, getRating(productId));
    });

    el.addEventListener('mouseover', (ev) => {
        var pointedStar = ev.target.getAttribute('name');
        ResetPaint(productId);
        PaintStar(productId, pointedStar);
    });

    el.addEventListener('mouseout', () => {
        ResetPaint(productId);
        PaintStar(productId, getRating(productId));
    });

});

document.querySelectorAll('.comment').forEach(el => {
    const el_id = el.getAttribute('id');
    const productId = el_id.slice(4, el_id.indexOf("__"));

    el.addEventListener('change', (ev) => {
        var currentCommentRating = {
            productId: productId,
            ratingPoint: null,
            comment: ev.target.value
        }

        if (existCommentRating(productId)) {
            setComment(productId, currentCommentRating.comment);
        } else {
            comment_rating.commentRating.push(currentCommentRating);
        }
    })
})

function PaintStar(productId, rp) {
    var starArr = document.querySelectorAll('#div-' + productId + '__rating span');
    starArr.forEach(star => {
        if (star.getAttribute('name') <= rp) star.classList.add('ratedStar');
    });
}

function ResetPaint(productId) {
    var starArr = document.querySelectorAll('#div-' + productId + '__rating span');
    starArr.forEach(star => {
        star.classList.remove('ratedStar');
    });
}

function getRating (id) {
    var point = null;
    comment_rating.commentRating.forEach(r => {
        if (r.productId == id) point = r.ratingPoint;
    });
    return point;
}

function setRating (id, newRate) {
    comment_rating.commentRating.forEach(r => {
        if (r.productId == id) r.ratingPoint = newRate;
    });
}

function setComment(id, newComment) {
    comment_rating.commentRating.forEach(r => {
        if (r.productId == id) r.comment = newComment;
    });
}

function existCommentRating (id) {
    var exist = false;
    comment_rating.commentRating.forEach(r => {
        
        if (r.productId == id) exist = true;
    });
    return exist;
}

window.addEventListener('beforeunload', async () => {
    await StoreCommentRating(comment_rating);
})

async function StoreCommentRating(commentRating) {
    await fetch("http://localhost:8000/comment-ratings", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(commentRating)
    })
      .catch((error) => {
        console.error('Error:', error);
      });
  }