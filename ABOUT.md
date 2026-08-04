# Inventory & Warehouse Management System

## Project Overview

The Inventory & Warehouse Management System (IWMS) is a web-based business management application built to help organizations efficiently manage products, inventory, warehouses, purchasing, receiving, sales, and stock movements from a single platform.

The primary goal of the system is to replace manual processes such as paper records and spreadsheets with a centralized, real-time inventory management solution.

---

# Problem Statement

Many small and medium-sized businesses still manage inventory using notebooks, spreadsheets, or disconnected software. This creates problems including:

- Inaccurate inventory counts
- Overstocking
- Stock shortages
- Lost or misplaced inventory
- Duplicate purchasing
- Slow warehouse operations
- Lack of accountability
- No audit trail
- Difficult reporting
- Poor purchasing decisions

The proposed system addresses these issues by automating inventory operations and maintaining a single source of truth.

---

# Objectives

The system aims to:

- Centralize inventory data.
- Track stock levels in real time.
- Manage warehouses and storage locations.
- Streamline purchasing and receiving.
- Record every stock movement.
- Improve inventory accuracy.
- Generate business reports.
- Support role-based access control.
- Maintain an audit trail for accountability.

---

# Scope

The system includes:

## Product Management

- Products
- Categories
- Brands
- Units of Measure
- Barcode / SKU support

## Warehouse Management

- Multiple Warehouses
- Warehouse Locations
- Stock per Warehouse

## Purchasing

- Suppliers
- Purchase Orders
- Purchase Order Items
- Approval Workflow
- Goods Receiving

## Inventory

- Stock Movements
- Inventory Adjustments
- Stock Transfers
- Stock Counts

## Sales

- Customers
- Sales Orders
- Sales Order Items

## Administration

- Users
- Roles
- Permissions
- Audit Logs

## Reporting

- Inventory Valuation
- Low Stock Report
- Fast-moving Products
- Slow-moving Products
- Purchase Reports
- Sales Reports
- Supplier Reports

---

# Traditional Workflow

1. Inventory is checked manually.
2. Purchasing decides what to order.
3. Purchase Orders are created manually.
4. Suppliers deliver products.
5. Warehouse staff manually count received items.
6. Products are stored.
7. Sales reduce inventory manually.
8. Periodic physical inventory is performed.
9. Reports are created manually.

---

# Proposed Workflow

1. Products are maintained in the system.
2. Low-stock alerts notify purchasing.
3. Purchase Orders are created digitally.
4. Managers approve Purchase Orders.
5. Suppliers deliver goods.
6. Warehouse staff receive deliveries into the system.
7. Inventory updates automatically.
8. Sales automatically deduct inventory.
9. Every inventory movement is recorded.
10. Managers monitor dashboards and reports.

---

# Primary Modules

- Authentication & RBAC
- Dashboard
- Product Management
- Supplier Management
- Customer Management
- Warehouse Management
- Purchasing
- Receiving
- Inventory Management
- Sales Management
- Reporting
- Audit Logging

---

# Core User Roles

- Administrator
- Purchasing Officer
- Purchasing Manager
- Warehouse Manager
- Warehouse Staff
- Sales Representative
- Sales Manager
- Inventory Controller
- Finance Officer
- General Manager

---

# Recommended Technology Stack

- Laravel
- Filament
- MySQL or PostgreSQL
- Spatie Laravel Permission
- Laravel Queue
- Laravel Notifications

---

# Expected Learning Outcomes

By completing this project, you will gain experience with:

- Laravel architecture
- Filament Resources
- Role-Based Access Control (RBAC)
- Database design
- Eloquent relationships
- Transactions
- Business workflows
- Dashboards
- Reporting
- Audit logging
- Enterprise application development

---

# Future Enhancements

- Barcode scanning
- QR code labels
- Mobile warehouse application
- Supplier portal
- Customer portal
- Email notifications
- Inventory forecasting
- Demand prediction
- Purchase recommendations
- Multi-company support
- API integrations