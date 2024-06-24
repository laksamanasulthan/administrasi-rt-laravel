import React from "react";
import ResidentLayout from "./Partials/ResidentLayout";
import { Head } from "@inertiajs/react";

export default function ResidentSettings() {

    return (
        <>
        
            <ResidentLayout>
                <Head
                    title="Settings"
                />
                <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <h1>Hi This is Resident Settings</h1>
                        </div>
                    </div>
                </div>

            </ResidentLayout>
        </>
    );
}