import React from "react";
import FinanceLayout from "./Partials/FinanceLayout";
import { Head } from "@inertiajs/react";

export default function FinanceSettings() {

    return (
        <>
        <FinanceLayout>
                 <Head
                    title="Settings"
                />
                <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <h1>Hi This is Settings</h1>
                        </div>
                    </div>
                </div>

        </FinanceLayout>
        
        </>
    );
}