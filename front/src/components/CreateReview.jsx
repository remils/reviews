import React from "react";
import { Button, Form } from "react-bootstrap";
import createReview from "../http/createReview";

export default function CreateReview() {
    function handleSubmit(event) {
        event.preventDefault();

        createReview(new FormData(event.target));
    }

    return (
        <Form className="p-3 bg-light" onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="formEmail">
                <Form.Label>Имя:</Form.Label>
                <Form.Control type="text" placeholder="Иван" name="name" />
            </Form.Group>
            <Form.Group className="mb-3" controlId="formEmail">
                <Form.Label>Электронная почта:</Form.Label>
                <Form.Control
                    type="email"
                    placeholder="name@example.com"
                    name="email"
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="formText">
                <Form.Label>Текст отзыва:</Form.Label>
                <Form.Control as="textarea" rows={3} name="text" />
            </Form.Group>
            <Button type="submit">Добавить отзыв</Button>
        </Form>
    );
}
