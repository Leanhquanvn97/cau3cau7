async function fetchUserData() {
    async function fetchUserData() {
    try {
     const user = await fetchUser();
     const posts = await fetchPosts(user.id);
     return { user, posts };
     } catch (error) {
     console.error("Error: " + error);
     }
    }
}
function fetchUser() {
    return new Promise(setTimeout(function () {
    return { id: 1, name: "John" };
    }, 1000));
}
function fetchPosts(userId) {
    return new Promise(setTimeout(function () {
    return [{ id: 1, title: "Blog 1" }, { id: 2, title: "Blog 2" }];
    }, 1500));
}