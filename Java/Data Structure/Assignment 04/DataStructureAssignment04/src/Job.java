/**
 *
 * File:         Job.java
 * Purpose:      Create a Job Class to store and retrieve data of a job.
 * Project:      CSIS 3400 Assignment 04
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
public class Job {
	private int jobNumber;
	private String timeOfArrival;
	private int priority;
	private int processingTime;
	private int timeOfArrivalMinutes;
	private int completionTime;

	Job(){
		timeOfArrival = null;
		priority = 0;
		processingTime = 0;
	}

	/**
	 * Method to set all the properties of a Job
	 * @param jobNumber
	 * @param timeOfArrival
	 * @param priority
	 * @param processingTime
	 */
	public void setJob(int jobNumber, String timeOfArrival, int priority, int processingTime){
		this.jobNumber = jobNumber;
		this.timeOfArrival = timeOfArrival;
		this.priority = priority;
		this.processingTime = processingTime;
		setTimeToMinutes();
	}

	/**
	 * Method to convert the time in normal format (12:00) in minutes format (720)
	 */
	private void setTimeToMinutes(){
		int hours, minutes;
		String[] splited = timeOfArrival.split(":");
		hours = Integer.parseInt(splited[0]) * 60;
		minutes = Integer.parseInt(splited[1]);
		this.timeOfArrivalMinutes = hours + minutes;
	}

	/**
	 * Method to set the completion time of a job.
	 * @param timeOfStart
	 */
	public void setCompletionTime(int timeOfStart){
		this.completionTime = timeOfStart + processingTime;
	}

	/**
	 * Method that returns the job number
	 * @return int
	 */
	public int getJobNumber(){
		return jobNumber;
	}

	/**
	 * Method that returns the Time of Arrivals in minutes (720)
	 * @return int
	 */
	public int getTimeOfArrival(){
		return timeOfArrivalMinutes;
	}

	/**
	 * Method that returns the priority of the job
	 * @return int
	 */
	public int getPriority(){
		return priority;
	}

	/**
	 * Method that returns the processing time of the job
	 * @return int
	 */
	public int getProcessingTime(){
		return processingTime;
	}

	/**
	 * Method that returns the completion time time of the job
	 * @return int
	 */
	public int getCompletionTime(){
		return completionTime;
	}
}
