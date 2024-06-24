import React from 'react';

import { useState } from 'react';
import NavLink from './NavLink';

export default function DashboardSide () {

    return (
        <>
        <div className="flex flex-col h-screen w-64 bg-gray-900 text-white shadow-lg">
            <div className="flex items-center justify-center h-20 bg-indigo-700 shadow-md rounded-t-lg">
                <NavLink href="/">
                <img className="h-10 w-auto" src="/images/logo.svg" alt="Logo" />
                </NavLink>
            </div>
            <nav className="mt-10 flex flex-col space-y-1 px-4">
                <NavLink
                href="/dashboard"
                className="flex items-center py-2.5 px-4 rounded-lg transition duration-200 hover:bg-indigo-600 hover:bg-opacity-75"
                >
                <svg
                    className="h-6 w-6 mr-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m6 6v-6a9 9 0 00-9-9H6a9 9 0 00-9 9v6z"
                    ></path>
                </svg>
                Dashboard
                </NavLink>

                <NavLink
                href={route('profile.index')}
                className="flex items-center py-2.5 px-4 rounded-lg transition duration-200 hover:bg-indigo-600 hover:bg-opacity-75"
                >
                <svg
                    className="h-6 w-6 mr-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M5.121 17.804A4 4 0 006 20h12a4 4 0 00.879-2.196M15 10a4 4 0 00-8 0 4 4 0 108 0zm4-7a1 1 0 112 0v1a1 1 0 01-2 0V3zM3 3a1 1 0 112 0v1a1 1 0 01-2 0V3z"
                    ></path>
                </svg>
                Profile
                </NavLink>
                
                <NavLink
                    href={route('admin.houses.house.index')} active={route().current('admin.houses.house.index')}
                    className="flex items-center py-2.5 px-4 rounded-lg transition duration-200 hover:bg-indigo-600 hover:bg-opacity-75"
                >
                <svg
                    className="h-6 w-6 mr-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M5.121 17.804A4 4 0 006 20h12a4 4 0 00.879-2.196M15 10a4 4 0 00-8 0 4 4 0 108 0zm4-7a1 1 0 112 0v1a1 1 0 01-2 0V3zM3 3a1 1 0 112 0v1a1 1 0 01-2 0V3z"
                    ></path>
                </svg>
                Houses
                </NavLink>

                <NavLink
                href={route('admin.residents.resident.index')} active={route().current('admin.residents.resident.index')}
                className="flex items-center py-2.5 px-4 rounded-lg transition duration-200 hover:bg-indigo-600 hover:bg-opacity-75"
                >
                <svg
                    className="h-6 w-6 mr-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M5.121 17.804A4 4 0 006 20h12a4 4 0 00.879-2.196M15 10a4 4 0 00-8 0 4 4 0 108 0zm4-7a1 1 0 112 0v1a1 1 0 01-2 0V3zM3 3a1 1 0 112 0v1a1 1 0 01-2 0V3z"
                    ></path>
                </svg>
                Residents
                </NavLink>

                <NavLink 
                    href={route('admin.finances.resident_contribution.index')} active={route().current('admin.finances.resident_contribution.index')}
                    className="flex items-center py-2.5 px-4 rounded-lg transition duration-200 hover:bg-indigo-600 hover:bg-opacity-75"
                >
                <svg
                    className="h-6 w-6 mr-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M5.121 17.804A4 4 0 006 20h12a4 4 0 00.879-2.196M15 10a4 4 0 00-8 0 4 4 0 108 0zm4-7a1 1 0 112 0v1a1 1 0 01-2 0V3zM3 3a1 1 0 112 0v1a1 1 0 01-2 0V3z"
                    ></path>
                </svg>
                Finance
                </NavLink>
            </nav>
        </div>
        </>
    );
}