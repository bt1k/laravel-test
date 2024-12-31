import './bootstrap';

function registerFormHandler() {
  if (typeof deletePostForm === 'undefined')
    return;
  deletePostForm.onsubmit = handleForm;
  deletePostForm.children[0].disabled = false;
}

async function handleForm(event) {
  event.preventDefault();
  if (!confirm('Are you sure you want to delete this post?'))
    return;
  const formData = new FormData(event.currentTarget);
  const postId = formData.get('id');
  const csrfToken = formData.get('_token');
  try {
    const response = await fetch(`/posts/${postId}`, {
      body: new URLSearchParams({ _token: csrfToken }),
      method: 'DELETE'
    });
    if (!response.ok)
      throw new Error();
    alert(`Post ${postId} successfully deleted.`);
    window.location = '/posts';
  } catch (_err) {
    alert('Deleting post failed. Please try again.');
  }
}

window.onload = registerFormHandler;
