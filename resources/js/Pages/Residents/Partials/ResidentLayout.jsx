import DashboardLayout from "@/Layouts/DashboardLayout";
import React from "react";
import ResidentNav from "./ResidentNav";

export default function ResidentLayout({children}) {

    return (
        <>
            <DashboardLayout>
                <ResidentNav/>
                    <main className="flex-1 p-6 overflow-y-auto">
                        {children}
                    </main>

            </DashboardLayout>
        </>
    )
}