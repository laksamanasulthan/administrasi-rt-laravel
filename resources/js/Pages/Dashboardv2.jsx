import DashboardLayout from "@/Layouts/DashboardLayout";
import React from "react";

export default function Dashboardv2 (){

    return (
        <>
        <DashboardLayout>
            <div className="bg-white p-6 rounded-lg shadow-lg">
                <h1 className="text-3xl font-bold mb-4">Dashboard</h1>
                <p className="text-gray-700">Welcome to your dashboard. Here you can manage your content and settings.</p>
            </div>
        </DashboardLayout>
        </>
    );
}