export default function createReview(body) {
    return fetch("http://localhost/api/review", {
        method: "POST",
        body: body,
    });
}
