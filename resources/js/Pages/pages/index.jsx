import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Index = ({ pages }) => {
    return (
        <div>
            <h1>Pages</h1>
            <InertiaLink href="/pages/create">Create New Page</InertiaLink>
            <ul>
                {pages.map(page => (
                    <li key={page.id}>{page.title}</li>
                ))}
            </ul>
        </div>
    );
};

export default Index;
