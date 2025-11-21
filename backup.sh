#!/bin/bash
mysqldump -u root luxe_voyage > backup_$(date +"%Y-%m-%d_%H-%M-%S").sql
