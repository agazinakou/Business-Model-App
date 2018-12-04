<?php

return [
    /**
     * Le repertoire des vues. C'est dans ce repertoire que
     * vous allez mettre tous vos vues.
     * Les vues doivent avoir l' instantion que vous avez définir
     * dans 'template_extension' si non erreur sera lancé
     */
    'path' => __DIR__ . '/../components/views',

    /**
     * chemin du fichier 404
     * Quand une uri est invalide, alors Bow
     * chargera ce fichier.
     */
    '404' => 'errors.404',

    /**
     * Le moteur de rendu des vues.
     *
     * Template par défaut utiliser par Bow.
     * Le système implement 4 moteur de template.
     *
     * Valeur possible (supported): twig, mustache, pug, php
     * - Le nom du package mustache: mustache/mustache
     * - Le nom du package pug: pug-php/pug
     */
    'engine' => 'twig',

    /**
     * Extension des pages de vues
     */
    'extension' => '.twig',

    /**
     * Le repertoire de cache.
     * quand le cache sera remplit c'est à vous de le vidé
     */
    'cache' => __DIR__ . '/../storage/workspace/view',

    /**
     * Option additionnel
     */
    'aditionnal_options' => [
        // 'auto_reload_cache' => true
    ]
];
