import React from "react";
import NavLink from "@/Components/NavLink";
import DashboardLayout from "@/Layouts/DashboardLayout";
import HouseNav from "./HouseNav";

export default function HouseLayout ({children})  {

    return (
        <>
            <DashboardLayout>
                <HouseNav/>
                    <main className="flex-1 p-6 overflow-y-auto">
                        {children}
                    </main>

            </DashboardLayout>
        </>
    );
}