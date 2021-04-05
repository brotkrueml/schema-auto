.. include:: /Includes.rst.txt


.. _developer:

================
Developer corner
================

Target group: **Developers**, **Integrators**

.. contents:: Table of Contents
   :depth: 2
   :local:


Using the API
=============

The API can be used like described in the :ref:`schema manual
<schema:api>`. But there is one detail: As the classes of this extensions
use a different namespace the instantiation of type models must reflect this::

   $busOrCoach = new \Brotkrueml\SchemaAuto\Model\Type\BusOrCoach();

Alternatively, you can use the :php:`TypeFactory`, so you don't have to deal
with namespaces::

   $busOrCoach = \Brotkrueml\Schema\Type\TypeFactory::createType('BusOrCoach');


Using the view helpers
======================

The Fluid view helpers can be used like described in the :ref:`schema manual
<schema:view-helpers>`:

.. code-block:: html

   <schema:type.busOrCoach
      -id="http://example.org/#some-bus"
      name="some bus"
   />

The Fluid namespace :html:`schema` is the same as for the core vocabulary.

