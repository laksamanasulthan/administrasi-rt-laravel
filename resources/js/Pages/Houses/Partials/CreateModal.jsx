// resources/js/Pages/Posts/CreateModal.jsx
import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';

const CreateModal = ({ show, onHide }) => {
  const [title, setTitle] = useState('');
  const [content, setContent] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    Inertia.post('/', { title, content }).then(() => onHide());
  };

  if (!show) return null;

  return (
    <div className="fixed inset-0 flex items-center justify-center z-50">
      <div className="bg-white p-6 rounded shadow-lg w-96">
        <h2 className="text-xl font-bold mb-4">Create Post</h2>
        <form onSubmit={handleSubmit}>
          <div className="mb-4">
            <label className="block text-gray-700">Title</label>
            <input
              type="text"
              value={title}
              onChange={(e) => setTitle(e.target.value)}
              className="w-full p-2 border border-gray-300 rounded mt-1"
              required
            />
          </div>
          <div className="mb-4">
            <label className="block text-gray-700">Content</label>
            <textarea
              value={content}
              onChange={(e) => setContent(e.target.value)}
              className="w-full p-2 border border-gray-300 rounded mt-1"
              required
            ></textarea>
          </div>
          <div className="flex justify-end">
            <button type="button" onClick={onHide} className="btn btn-secondary mr-2">Close</button>
            <button type="submit" className="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default CreateModal;
