export default function reviews() {
    return fetch("http://localhost/api/review", {
        method: "GET",
    }).then((res) => res.json());
}
