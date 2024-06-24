import DashboardLayout from "@/Layouts/DashboardLayout";
import React from "react";
import ProfileNav from "./ProfileNav";

export default function ProfileLayout({children}) {

    return (
        <>
            <DashboardLayout>
                <ProfileNav/>
                    <main className="flex-1 p-6 overflow-y-auto">
                        {children}
                    </main>
            </DashboardLayout>
        </>
    );
}