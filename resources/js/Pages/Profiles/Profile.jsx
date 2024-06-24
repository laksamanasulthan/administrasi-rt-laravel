import React from "react";
import ProfileLayout from "./Partials/ProfileLayout";
import { Head } from "@inertiajs/react";

export default function Profile(){
    return (
        <>
            <ProfileLayout>

                <Head
                    title="Profile"
                />
                <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <h1>Hi This is Profile</h1>
                        </div>
                    </div>
                </div>

            </ProfileLayout>
        
        </>
    );
}