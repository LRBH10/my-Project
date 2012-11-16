
(defclass singleton-class (standard-class)
  ((instance :accessor class-instance
	     :initform nil
	       ))
  
  (:metaclass standard-class)
)


;;make-instance de singleton-class

(defmethod make-instance ((mc singleton-class) &rest initargs)
  (if (eq (class-instance mc) nil)
      (let ((xm (call-next-method)))
	    (setf (class-instance mc) xm)
	    xm)
      (class-instance mc)
    )
)
    
(defmethod validate-superclass ((mc singleton-class) (sup standard-class))
  t)



;(defmethod validate-superclass ( x (mc singleton-class))
;  ()
;)



;; CLASS A
(defclass A ()
  ()
  (:metaclass singleton-class)
)

;; CLASS B

(defclass B (A)
  ()
  (:metaclass singleton-class)
)
