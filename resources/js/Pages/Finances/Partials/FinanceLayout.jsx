import React from "react";
import NavLink from "@/Components/NavLink";
import DashboardLayout from "@/Layouts/DashboardLayout";
import FinanceNav from "./FinanceNav";

export default function FinanceLayout({ children }) {

    return (
        <>
            <DashboardLayout>
                <FinanceNav/>
                    <main className="flex-1 p-6 overflow-y-auto">
                        {children}
                    </main>
            </DashboardLayout>
        </>
    );
}