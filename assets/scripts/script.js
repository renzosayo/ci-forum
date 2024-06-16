const showFormButton = document.querySelector(".post-button");
const postForm = document.querySelector(".post-form");
const postBody = document.querySelector(".post-body");
const submitPost = document.querySelector(".submit-post");
const cancelPost = document.querySelector(".cancel-post");

if (showFormButton) {
	showFormButton.addEventListener("click", () => {
		postForm.classList.toggle("d-none");
		showFormButton.classList.toggle("d-none");
	});
}

if (postBody) {
	postBody.addEventListener("input", (e) => {
		e.target.value.trim() !== ""
			? (submitPost.disabled = false)
			: (submitPost.disabled = true);
	});
}

if (cancelPost) {
	cancelPost.addEventListener("click", () => {
		postBody.value = "";
		postForm.classList.toggle("d-none");
		showFormButton.classList.toggle("d-none");
	});
}
