<!DOCTYPE html>
<html>
<head>
  <title>My Facebook-style Post Box</title>
  <style>
    .post-container {
      margin-top: 20px;
    }

    .post {
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }

    .post p:first-child {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .post p.post-date {
      font-size: 0.8em;
      color: #999;
      margin-bottom: 10px;
    }

    .post button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 5px 10px;
      margin-right: 10px;
      cursor: pointer;
    }

    .post .comments {
      margin-top: 10px;
    }

    .post .comments p {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="post00">
    <form id="post-form">
      <textarea name="post-text" placeholder="What's on your mind?"></textarea>
      <button type="submit" name="post-btn" id="btn"class=S>Post</button>
    </form>
  </div>

  <div class="post-container">
    <!-- Display posts here -->
  </div>

  <script>
    // Get the form, textarea, and post container elements
    const postForm = document.getElementById('post-form');
    const postTextarea = postForm.querySelector('textarea');
    const postContainer = document.querySelector('.post-container');

    // Add an event listener to the form submit event
    postForm.addEventListener('submit', e => {
      e.preventDefault(); // Prevent the default form submission behavior

      const postText = postTextarea.value; // Get the post text
      const postDate = new Date(); // Get the current date and time
      const postLikes = 0; // Set the initial likes count
      const postComments = []; // Set the initial comments array

      // Create a new post element and add it to the post container
      const postElement = document.createElement('div');
      postElement.classList.add('post');
      postElement.innerHTML = `
        <p>${postText}</p>
        <p class="post-date">${postDate}</p>
        <button class="like-btn">Like</button>
        <button class="comment-btn">Comment</button>
        <button class="share-btn">Share</button>
        <div class="comments"></div>
      `;
      postContainer.insertBefore(postElement, postContainer.firstChild);

      // Clear the post textarea
      postTextarea.value = '';
    });
  </script>
</body>
</html>