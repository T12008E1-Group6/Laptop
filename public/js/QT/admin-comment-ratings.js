var comment_ratingsStatus = []

document.querySelectorAll('.comment_rating__status').forEach(el => {
    const el_id = el.getAttribute('id');
    const comment_ratingId = el_id.slice(4, el_id.indexOf("__"));

    var initialcomment_ratingsStatus = {
        comment_ratingId: comment_ratingId,
        comment_ratingstatus: el.value,
    }

    comment_ratingsStatus.push(initialcomment_ratingsStatus);

    el.addEventListener('change', ev => {
        var newStatus = ev.target.value;
        setStatus(comment_ratingId, newStatus);
        if (newStatus == 'waiting-check') {
            el.classList.remove('approved', 'rejected');
            el.classList.add('waiting-check');
        } else if (newStatus == 'approved') {
            el.classList.remove('waiting-check', 'rejected');
            el.classList.add('approved');
        } else {
            el.classList.remove('waiting-check', 'approved');
            el.classList.add('rejected');
        }
        document.getElementById('confirmChangeStatus').disabled = false;
    })
});

function setStatus(id, newStatus) {
    comment_ratingsStatus.forEach(os => {
        if (os.comment_ratingId == id) os.comment_ratingstatus = newStatus;
    });
}

document.getElementById('confirmChangeStatus')
    .addEventListener('click', async function() {
        await Storecomment_ratingsStatus(comment_ratingsStatus);
        this.textContent = 'Changed';
        this.disabled = true;
    });

window.addEventListener('beforeunload', async () => {
    await Storecomment_ratingsStatus(comment_ratingsStatus);
});

async function Storecomment_ratingsStatus(comment_ratingsStatus) {
    await fetch("http://localhost:8000/admin-update-comment-rating-status", {
      method: "PUT",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(comment_ratingsStatus)
    })
      .catch((error) => {
        console.error('Error:', error);
      });
  }