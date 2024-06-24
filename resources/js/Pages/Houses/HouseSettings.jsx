import React from "react";
import NavLink from "@/Components/NavLink";
import HouseLayout from "./Partials/HouseLayout";
import { Head } from "@inertiajs/react";

export default function HouseSettings({ housingStatus  }) {

    return (
        <HouseLayout>
            <Head
                title="House Settings"
            />
            <h1>Welcome Settings</h1>

        </HouseLayout>
    );
}