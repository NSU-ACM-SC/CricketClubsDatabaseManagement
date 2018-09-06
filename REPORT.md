# Information System for Cricket Clubs of Bangladesh

## System Description

The aim of this system is to keep information of all the cricket players and clubs of
Bangladesh. There are many cricket clubs in Bangladesh. A club has many players. A
player registers to a club for a certain period of time with a start date and end date
and signs a contract with the club. In the contract a total fee and a schedule of
payment is mentioned. In the payment schedule, there is a payment id which is
unique for a schedule of the player. Other information for the payment is schedule
date, amount and actual payment date. The sum of the total payment of the schedule
cannot be more or less than the fee mentioned in the contract. A player’s profile
must be stored in the database as follows:

Name, father’s name, mother’s name, educational qualifications (degree name,
department/ institute, Board/ University, Year), previous clubs where he played for
(club id, start date, end date, total runs, total wickets), international events (event id,
location, performance details etc. (Here student can add attributes of importance to
describe the performance details of the player.) To enroll to any club, the player
needs to fill up a registration for as per Attachment 1. After submission of the
registration form, if the club decides to hire the player for the club, a contract is
signed as per Attachment 2. A new club is registered after submission of information
as per Attachment 3.

Bangladesh Cricket Control Board (BCCB) organizes different types of events. An
event has an event id, location, start date, end date. In an event, there are many
matches in different times in different venues. Many matches can be organized in a
venue in different times but a match must be organized in a single venue. Every
match has a match id, date, team-batting-first, team-bowling-first. You have to keep
the performance of every player of every match according to the form as per
Attachment 4.

The club forms teams to participate to different events organized by BCCB in
different times. Among the players, a team leader is selected. Different teams of the club can have different team leader. A team has a team id, date of formation and
team leader. A team must be form with a maximum of 15 players. A player can play
many teams in different times. A team is formed for exactly one event. In the event, a
team participates in many matches.

##Task 

You have to implement the following integrity constraints for your system.
1. A player cannot enroll into two clubs simultaneously.
2. A team cannot be formed more than 15 players.
3. In the payment schedule, the sum of the total payment of the schedule cannot
be more or less than the fee mentioned in the contract.
4. Age of a player cannot be more than 35 years.
5. A match cannot be held in between more than two teams.


### Find the attachments as jpg files in the Attachments folder containing this file.