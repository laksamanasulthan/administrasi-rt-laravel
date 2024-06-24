import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import DataTable from 'react-data-table-component';
import { useState } from 'react';
import HouseLayout from './Partials/HouseLayout';


export default function HouseIndex({ auth, data }) {
    
    const [showCreateModal, setShowCreateModal] = useState(false);
    const [showEditModal, setShowEditModal] = useState(false);
    const [currentData, setCurrentData] = useState(null);

    const handleEdit = (data) => {
        setCurrentData(data);
        setShowEditModal(true);
    };

    const columns = [
        {
            name: 'No',
            selector: (row, index) => index + 1,
            sortable: true,
            width: '75px',
        },
        { name: 'Alamat', selector: row => row.address, sortable: true, width: '500px' },
        { name: 'Luas', selector: row => row.area, sortable: true },
        { name: 'Status', selector: row => row.house_belongs_to_housing_status.status, sortable: true },
        { name: 'No. Rumah', selector: row => row.no, sortable: true, },
        {
        name: 'Actions', cell: row => (
            <div>
            <button onClick={() => handleEdit(row)} className="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
            <Link href={route('admin.houses.house.show', `${row.id}`)} className="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500">View</Link>
            </div>
        )
        }
    ];

    return (
        <>
            <HouseLayout>
                <Head title="Houses" />

                <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6 text-gray-900 dark:text-gray-100">
                                <button onClick={() => setShowCreateModal(true)} className="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Insert</button>
                            </div>
                    
                            <DataTable columns={columns} data={data} pagination />
                        </div>
                    </div>
                </div>
            </HouseLayout>
        </>
    );
}
