import React from "react";
import NavLink from "@/Components/NavLink";
import { Link } from "@inertiajs/react";

export default function HouseNav ({}) {

    return (
        <>
            <header className="bg-white shadow">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-16">
                    <div className="flex">
                        <div className="flex-shrink-0 flex items-center">
                        {/* <NavLink href="/">
                            <img className="h-8 w-auto" src="/images/logo.svg" alt="Logo" />
                        </NavLink> */}
                        </div>
                        <div className="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <NavLink
                           href={route('admin.houses.house.index')} active={route().current('admin.houses.house.index')}
                        >
                            House
                        </NavLink>
                        <NavLink
                            href={route('admin.houses.settings')} active={route().current('admin.houses.settings')}
                        >
                            Settings
                        </NavLink>
                        </div>
                    </div>
                    <div className="hidden sm:ml-6 sm:flex sm:items-center">
                        <Link
                            href={route('logout')}
                            method='post'
                            as='button'
                            className='bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700'
                        >
                            Logout
                        </Link>
                    </div>
                    </div>
                </div>
            </header>

        </>
    );

} 