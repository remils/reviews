import React from "react";
import { Container } from "react-bootstrap";
import CreateReview from "../components/CreateReview";
import Reviews from "../components/Reviews";
import { EchoProvider } from "../helpers/echo";

export default function Main() {
    return (
        <EchoProvider>
            <Container>
                <CreateReview />
                <Reviews />
            </Container>
        </EchoProvider>
    );
}
