(defun polygone (memo-object)
  ((angles :initarg :angles
	   :accessor get_angles)
   (sides  :initarg :sides
	   :accessor get_sides)
   (side_nbr :accessor get_nbr_sides)
   (angles_sum :accessor get_angles_sum))
  (:metaclass memo-class)
)

(defun quadrilatere (polygone)
  ((side-nbr :allocation :class
	     :initform 4)))

