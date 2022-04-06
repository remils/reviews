import React from "react";
import Echo from "laravel-echo";
import Pusher from "pusher-js";

export const EchoContext = React.createContext();

export function EchoProvider(props) {
    window.pusher = Pusher;

    const echo = new Echo({
        broadcaster: "pusher",
        key: "test",
        cluster: "test",
        wsHost: "127.0.0.1",
        wsPort: 6001,
        forceTLS: false,
        disableStats: true,
    });

    const value = {
        reviewCreateEvent: (cb) =>
            echo.channel("review").listen("Review.CreateEvent", cb),
        stopReviewCreateEvent: () =>
            echo.channel("review").stopListening("Review.CreateEvent"),
    };

    return <EchoContext.Provider {...props} value={value} />;
}
