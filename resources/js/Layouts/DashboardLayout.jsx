import DashboardSide from "@/Components/DashboardSide";
import React from "react";

export default function DashboardLayout({ children}) {
    
    return(
        <>
        <div className="flex h-screen bg-gray-100">
            <DashboardSide />
            <div className="flex flex-col flex-1 w-full">
                {children}
            </div>
        </div>
        
        </>
    );
}