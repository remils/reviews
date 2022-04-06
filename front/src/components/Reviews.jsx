import React, { useContext, useEffect, useState } from "react";
import { Card } from "react-bootstrap";
import { EchoContext } from "../helpers/echo";
import reviews from "../http/reviews";

export default function Reviews() {
    const [list, setList] = useState([]);
    const { reviewCreateEvent, stopReviewCreateEvent } =
        useContext(EchoContext);

    useEffect(() => {
        reviewCreateEvent((event) => setList([...list, event.review]));

        return () => {
            stopReviewCreateEvent();
        };
    }, [list]);

    useEffect(() => {
        reviews().then((res) => setList(res));
    }, []);

    return (
        <>
            {list.map((review) => (
                <Card key={review.id}>
                    <Card.Body>
                        <Card.Title>
                            {review.name}, {review.email}
                        </Card.Title>
                        <Card.Text>{review.text}</Card.Text>
                    </Card.Body>
                </Card>
            ))}
        </>
    );
}
