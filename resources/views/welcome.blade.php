<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product & Category Management API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f8fafc;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        h1,
        h2,
        h3 {
            color: #111827;
        }

        code {
            background: #f1f5f9;
            padding: 4px 6px;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        th,
        td {
            border: 1px solid #e5e7eb;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f9fafb;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Product & Category Management API</h1>
        <p class="badge">Laravel 12 · REST API · Sanctum Auth</p>

        <p>
            This application provides a RESTful API for managing products and categories.
            It is built using <strong>Laravel 12</strong> and follows best practices for
            authentication, validation, pagination, and error handling.
        </p>

        <hr>

        <h2>🔐 Authentication</h2>
        <table>
            <tr>
                <th>Method</th>
                <th>Endpoint</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/api/register</code></td>
                <td>Register a new user</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/api/login</code></td>
                <td>Login and receive access token</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/api/logout</code></td>
                <td>Logout (revoke token)</td>
            </tr>
        </table>

        <h2>📂 Categories</h2>
        <table>
            <tr>
                <th>Method</th>
                <th>Endpoint</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/api/categories</code></td>
                <td>List categories</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/api/categories</code></td>
                <td>Create category</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/api/categories/{id}</code></td>
                <td>View category</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td><code>/api/categories/{id}</code></td>
                <td>Update category</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td><code>/api/categories/{id}</code></td>
                <td>Soft delete category</td>
            </tr>
        </table>

        <h2>📦 Products</h2>
        <table>
            <tr>
                <th>Method</th>
                <th>Endpoint</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/api/products</code></td>
                <td>List products (with filters)</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/api/products</code></td>
                <td>Create product</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/api/products/{id}</code></td>
                <td>View product</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td><code>/api/products/{id}</code></td>
                <td>Update product</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td><code>/api/products/{id}</code></td>
                <td>Delete product</td>
            </tr>
        </table>

        <h3>🔍 Product Filters</h3>
        <pre>
/api/products?category_id=1
/api/products?status=active
/api/products?min_price=100&max_price=500
/api/products?search=phone
/api/products?page=1&per_page=10
    </pre>

        <hr>

        <p>
            <strong>Note:</strong> All endpoints (except login & register) require
            authentication using a Bearer token via Laravel Sanctum.
        </p>

        <p>
            📄 Full documentation is available in <code>README.md</code>.
        </p>
    </div>

</body>

</html>
